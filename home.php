<?php 
    $filename = basename($_SERVER['PHP_SELF'], '.php');

    include_once 'inc/global.php';
?>

<?php include_once 'inc/header.php'; ?>

    <!-- Main wrapper -->
    <div class="main-wrapper">
        <!-- Title Section -->
        <section id="title" class="color-section">
            <div class="cta">
                <h1>Buy & sell Crypto in minutes</h1>
                <p>Join <span class="text-dark">inv</span>Buy today</p>
                <a class="btn btn-light" href="" role="button">Join Us Now!</a>
            </div>
            <div class="white-section">
                <!-- Market Nav Scrollable -->
            </div>
        </section>
        
        <!-- Features Section -->
        <section id="features" class="white-section">

            <div class="row">
                <div class="feature-box col-lg-4">
                <i class="icon fad fa-credit-card fa-4x feature-icon"></i>
                <h3 class="feature-title">Support Buying Crypto with Credit and Debit Cards</h3>
                <p>
                    Buy Bitcoin with credit card and other methods instantly and safely. 
                    </p>
                </div>

                <div class="feature-box col-lg-4">
                <i class="icon fas fa-id-card fa-4x feature-icon"></i>
                <h3 class="feature-title">Membership</h3>
                <p>We offer low-cost membership. You can also trade with no restrictions.</p>
                <a class="btn btn-default" href="" role="button">Join Us Now!</a>
                </div>

                <div class="feature-box col-lg-4">
                <i class="icon fas fa-heart fa-4x feature-icon"></i>
                <h3 class="feature-title">Trade crypto with zero fees.</h3>
                <p>You can buy ETH, USDT, ADA, LTC, LINK, and other cryptos for very low fees.</p>
                </div>
            </div>

        </section>

        <!-- Packages Section -->
        <section id="packages" class="color-section">
            <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                <h1 class="display-5">Investment Plans</h1>
            </div>
            <div class="container">
                <div class="card-deck mb-3 text-center">
                    <div class="row gx-5">
                        <div class="col-md-6">
                            <div class="card mb-4 shadow-lg">
                                <div class="card-header">
                                    <h4 class="my-0">Starter</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title">₦5,500-₦55,000</h1>
                                    <p>( <small> $14.45 - $144.55</small> )</p>
                                    <ul class="list-unstyled mt-3 mb-4">
                                    <li>Get 30%</li>
                                    <li>For 6 months</li>
                                    <div class="card-divider"></div>
                                    <li>247 - Customer Service</li>
                                    <li>Instant - Withdrawal</li>
                                    </ul>
                                    <button type="button" class="btn btn-lg btn-block btn-default">Invest Now</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card mb-4 shadow-lg">
                                <div class="card-header">
                                    <h4 class="my-0">Gold</h4>
                                </div>
                                <div class="card-body">
                                    <h1 class="card-title">₦65000-₦1.5m</h1>
                                    <p>( <small> $170.83 - $3,942.18</small> )</p>
                                    <ul class="list-unstyled mt-3 mb-4">
                                    <li>Get 30%</li>
                                    <li>For 6 months</li>
                                    <div class="card-divider"></div>
                                    <li>247 - Customer Service</li>
                                    <li>Instant - Withdrawal</li>
                                    </ul>
                                    <button type="button" class="btn btn-lg btn-block btn-default">Invest Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="white-section">
            <div class="header pb-1">
                <h3 class="h2 display-5">About Us</h3>
            </div>
            <div id="accordion">
                <div class="faq-list">
                    <ul>
                        <li>
                            <h4 class="mb-0">
                                <a data-toggle="collapse" href="#faq1" aria-expanded="true" aria-controls="faq1"
                                class="accordion-toggle">
                                Why Join Us?
                                </a>
                            </h4>

                            <div id="faq1" class="collapse show" data-parent="#accordion">
                                <p>To maximize your income and gain financial freedom.</p>
                            </div>
                        </li>
                        <li>
                            <h4 class="mb-0">
                                <a data-toggle="collapse" href="#faq2" aria-expanded="false" aria-controls="faq2"
                                class="accordion-toggle">
                                Who are we?
                                </a>
                            </h4>

                            <div id="faq2" class="collapse" data-parent="#accordion">
                                <p>invBuy is a foreign based company that is built to be the best company in crypto trading. And want to contribute to a sustainable trading community.</p>
                            </div>
                        </li>
                        <li>
                            <h4 class="mb-0">
                                <a data-toggle="collapse" href="#faq3" aria-expanded="false" aria-controls="faq3"
                                class="accordion-toggle">
                                invBuy supported cryptocurrencies?
                                </a>
                            </h4>

                            <div id="faq3" class="collapse" data-parent="#accordion">
                                <p>BTC(Bitcoin)/USDT, ETH(Ethereum)/USDT, XRP(Ripple)/USDT, LINK(ChainLink)/USDT, XTZ(Tezos)/USDT, LTC(Litecoin)/USDT, ADA(Cardano)/USDT, TRX(Tron)/USDT, ONT(Ontology)/USDT, BCH(Bitcoin Cash)/USDT, NEO(Neo)/USDT, EOS(Eos)/USDT, and DOGE(Dogecoin)/USDT.</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>

<?php include_once 'inc/footer.php'; ?>