        <nav>
            <img src="/img/logo_big.png" alt="Logo" class="nav-elements" id="nav-logo">
            <div class="nav-elements" id="compare">COMPARE</div>
            <!-- Shopping cart -->
            <!-- <div class="nav-elements"><div class="circle"></div></div> -->
        </nav>
        <div class="container">
            <div class="cards-wrapper">
                <?php foreach($components ?? [] as $c): ?>
                <div class="card">
                    
                    <div class="card-top">
                        <input type="checkbox" name="" class="checkbox" > <!-- JS Változtatja -->
                        <img class="prod-img" src="<?= $c["imgpath"] ?>">
                    </div>

                    <div class="card-mid">
                        <div class="brand nvidia"><?php echo $c["brand"] ?></div>
                        
                        <strong class="prod-name"><?php echo $c["name"] ?></strong>

                        <div class="prod-detail">
                            <div class="detail-wrapper">
                                <?php foreach(array_keys($c["details"]) as $k): ?>
                                    <div class="detail-elem">
                                        <p class="detail-type"><?php echo $k ?></p>
                                        <p class="detail-value"><?php echo $c["details"][$k] ?></p>
                                    </div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>

                    <div class="card-bot">
                        <strong class="prod-price"><?php echo $c["price"] ?> Ft</strong>
                        <button class="prod-select">SELECT</button>
                    </div>
                </div>
                <?php endforeach ?>
    </div>
        </div>
    <script src="/js/script.js"></script>