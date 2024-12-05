
        <nav>
            <img src="img/logo_big.png" alt="Logo" class="nav-elements" id="nav-logo">
            <div class="nav-elements" id="compare">COMPARE</div>
            <!-- Shopping cart -->
            <!-- <div class="nav-elements"><div class="circle"></div></div> -->
        </nav>
        <div class="container">
            <div class="cards-wrapper">
                <?php foreach($components as $c): ?>
                <div class="card">
                    
                    <div class="card-top">
                        <input type="checkbox" name="" id="" hidden> <!-- JS Változtatja -->
                        <img class="prod-img" src="uploads/<?= $c["file"] ?>">
                    </div>

                    <div class="card-mid">
                        <div class="brand <?= strtolower($c["brand"]); ?>"><?= strtoupper($c["brand"]); ?></div>
                        <strong class="prod-name"><?= $c["name"]; ?></strong>
                        <div class="review">
                            <i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i>
                            <i class="fa-solid fa-star fa-2xs" style="color: #FFD43B;"></i>
                        </div>

                        <div class="prod-detail">
                            <div class="detail-wrapper">
                                <div class="detail-elem">
                                    <p class="detail-type">Memory</p>
                                    <p class="detail-value">16GB</p>
                                </div>

                                <div class="detail-elem">
                                    <p class="detail-type">Power</p>
                                    <p class="detail-value">750W</p>
                                </div>
                            </div>

                            <div class="detail-elem">
                                <a class="detail-more" href="#">More</a>
                            </div>
                        </div>
                    </div>

                    <div class="card-bot">
                        <strong class="prod-price"><?= $c["price"]; ?> Ft</strong>
                        <button class="prod-select">SELECT</button>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
