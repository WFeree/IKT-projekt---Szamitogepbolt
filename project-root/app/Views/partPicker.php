    <div class="cart-shadow-overlay"></div>
    <nav>
        <img src="img/logo_big.png" alt="Logo" class="nav-elements" id="nav-logo">
    </nav>
    <div class="switchtabs">
        <div class="tab active essential">
            <p>Essentials</p>
        </div>
        <div class="tab other">Peripherials</div>
    </div>
    <div class="container">
        <div class="categories">
            <p>Item</p>
            <p>Selection</p>
            <p>Base</p>
            <p>Tax</p>
            <p>Price</p>
        </div>
        <div class="necessary active-items">
            <div class="item-row">
                <div class="item">
                    <p id="load">Motherboard</p>
                </div>
                <div class="item-choose">
                    <button id="add-part">Choose A Motherboard +</button>
                </div>
            </div>
            <div class="item-row">
                <div class="item">
                    <p id="load">Processor</p>
                </div>
                <div class="item-choose">
                    <button id="add-part">Choose A Processor +</button>
                </div>
            </div>
            <div class="item-row">
                <div class="item">
                    <p id="load">Memory</p>
                </div>
                <div class="item-choose">
                    <button id="add-part">Choose A Memory +</button>
                </div>
            </div>
            <div class="item-row">
                <div class="item">
                    <p id="load">Graphics Card</p>
                </div>
                <div class="item-choose">
                    <button id="add-part">Choose A Graphics Card +</button>
                </div>
            </div>
            <div class="item-row">
                <div class="item">
                    <p id="load">HDD</p>
                </div>
                <div class="item-choose">
                    <button id="add-part">Choose A HDD +</button>
                </div>
            </div>
        </div>
        <div class="optional">
            <div class="item-row">
                <div class="item">
                    <p id="load">Monitor</p>
                </div>
                <div class="item-choose">
                    <button id="add-part">Choose A Monitor +</button>
                </div>
            </div>
            <div class="item-row">
                <div class="item">
                    <p id="load">Mouse</p>
                </div>
                <div class="item-choose">
                    <button id="add-part">Choose A Mouse +</button>
                </div>
            </div>
            <div class="item-row">
                <div class="item">
                    <p id="load">Keyboard</p>
                </div>
                <div class="item-choose">
                    <button id="add-part">Choose A Keyboard +</button>
                </div>
            </div>
        </div>
    </div>

    <div class="cart-icon" onclick="toggleOverlay()">
        <i class="fa-solid fa-cart-shopping"></i>
        <div class="cart-count">
            <p class="cart-num">0</p>
        </div>
    </div>
    <div class="cart-overlay">
        <div class="item-section">

        </div>
        <div class="build-section">
            <button>Ready To Build!</button>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/3b31cb99f3.js" crossorigin="anonymous"></script>
    <script src="js/partPicker.js"></script>