<?php
 $a = 'ammaam';
    /**
     * Get Page Title
     * 
     * @param string $filename
     * 
     * @return string $pageTitle
     */
    function getPageTitle($filename) {
        $pageTitle = '';

        switch ($filename) {
            case 'home':
                $pageTitle = 'Home';
                break;
            case 'login':
                $pageTitle = 'Log In';
                break;
            case 'signup':
                $pageTitle = 'Sign Up';
                break;
            case 'dashboard':
                $pageTitle = 'Dashboard';
                break;
            default:
                $pageTitle = '';
                break;
        }

        return $pageTitle;
    }

    /**
     * Get DB connection
     * 
     * @param void
     * 
     * @return db connection
     */
    function getDatabaseConnection() {
        try { // connect to database and return connections
            $conn = new PDO( 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS );
            return $conn;
        } catch ( PDOException $e) {
            return $e->getMessage();
        }
    }

    /**
     * Get user with email address
     * 
     * @param string $email
     * 
     * @return array $userInfo
     */
    function getUserWithEmailAddress( $email ) {
        // get database connection
        $databaseConnection = getDatabaseConnection();

        // create sql statement
        $stmt = $databaseConnection -> prepare('
            SELECT 
                *
            FROM 
                users 
            WHERE 
                email = :email 
        ' );

        // execute sql with actual values
        $stmt->setFetchMode( PDO::FETCH_ASSOC );
        $stmt->execute( array(
            'email' => trim( $email )
        ) );

        // get and return user
        $user = $stmt->fetch();
        return $user;
    }

    /**
     * Validate sign up form
     * 
     * @return array $result
     */
    function validateSignUp() {
        $result = array(
            'status' => '',
            'message' => ''
        );
        if ( empty( $_POST['username'] ) || empty( $_POST['email'] ) || empty( $_POST['pass'] ) || empty( $_POST['repass'] ) ) {
            $result['status'] = 'fail';
            $result['message'] = 'All fields must be filled in.';
        } else { // All fields are filled
            $userInfo = getUserWithEmailAddress( trim( $_POST['email'] ) );
    
            if ( !filter_var( trim($_POST['email']), FILTER_VALIDATE_EMAIL) ) {
                $result['status'] = 'fail';
                $result['message'] = 'Invalid Email';
            } elseif ( !empty( $userInfo ) ) { // user already exists with that email
                $result['status'] = 'fail';
                $result['message'] = 'Email address already registered';
            } elseif ( !( $_POST['username'] ) ) { // validate username
                $result['status'] = 'fail';
                $result['message'] = 'Invalid Username';
            } elseif ( !$_POST['pass'] ) { // validate password
                $result['status'] = 'fail';
                $result['message'] = 'Invalid password';
            } elseif ( strlen( $_POST['pass'] ) < 8 ) {
                $result['status'] = 'fail';
                $result['message'] = 'Passwords must be at least 8 characters';
            } elseif ( $_POST['pass'] != $_POST['repass'] ) {
                $result['status'] = 'fail';
                $result['message'] = 'Passwords do not match';
            } elseif (!signUserUp( $_POST )) { // validate insert into dbase
                // // sign the user up
                // $userId = signUserUp( $_POST );
            
                $result['status'] = 'fail';
                $result['message'] = 'Sign up was unsuccessful. Please try again.';
            } else { // all passes
                $result['status'] = 'ok';
                $result['message'] = 'Hey! You have successfully registered.';
            }
        }
        
        return $result;
    }

    /**
     * Sign a user up
     * 
     * @param array $info
     * 
     * @return int $userId
     */
    function signUserUp( $info ) {
        // get database connection
        $databaseConnection = getDatabaseConnection();

        // create sql statement
        $stmt = $databaseConnection -> prepare('
            INSERT INTO
            users (
                username,
                pass,
                email,
                ip
            )
            VALUES (
                :username,
                :pass,
                :email,
                :ip
            )
        ');

        // execute sql with actual values
        $stmt->execute( array(
            'username' => trim( $_POST['username'] ),
            'pass' => isset( $info['pass'] ) ? hashedPassword( $info['pass'] ) : '',
            'email' => trim( $info['email'] ),
            'ip' => trim( $info['ip'] )
        ) );

        // return id of inserted row
        return $databaseConnection->lastInsertId();
    }

    /**
	 * Hash password
	 *
	 * @param String $password plain text password
	 * @param String $salt to hash passoword with set to false auto gen one
	 *
	 * @return String of password now hashed
	 */
    function hashedPassword( $password ) {
		$random = openssl_random_pseudo_bytes( 18 );
		$salt = sprintf( '$2y$%02d$%s',
			12, // 2^n cost factor, hackers got nothin on this!
			substr( strtr( base64_encode( $random ), '+', '.' ), 0, 22 )
		);

		// hash password with salt
		$hash = crypt( $password, $salt );

		// return hash
		return $hash;
	}

    if ( !function_exists( 'password_verify' ) ) { // if version of php does not have password_verify function we need to define it
		/**
		 * password_verify()
		 *
		 * @link	http://php.net/password_verify
		 * @param	string	$password
		 * @param	string	$hash
		 * @return	bool
		 */
		function password_verify( $password, $hash ) {
			if ( strlen( $hash ) !== 60 OR strlen($password = crypt($password, $hash)) !== 60) {
				return FALSE;
			}

			$compare = 0;

			for ( $i = 0; $i < 60; $i++ ) {
				$compare |= ( ord( $password[$i] ) ^ ord( $hash[$i] ) );
			}

			return ( $compare === 0 );
		}
	}

    /**
     * Check if user is logged in
     * 
     * @param void
     * 
     * @return boolean
     */
    function isLoggedIn() {
        if ( ( isset( $_SESSION['is_logged_in'] ) && $_SESSION['is_logged_in'] ) && ( isset( $_SESSION['user_info'] ) && $_SESSION['user_info'] ) ) { //check session variables, user is logged in
            return true;
        } else { // user is not logged in
            return false;
        }
    }