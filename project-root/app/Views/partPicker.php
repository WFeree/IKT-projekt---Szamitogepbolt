<div class="cart-shadow-overlay"></div>
    <nav>
        <img src="/img/logo_big.png" alt="Logo" class="nav-elements" id="nav-logo">
    </nav>
    <div class="switchtabs">
        <div class="tab active essential"><p>Essentials</p></div>
        <div class="tab other">Peripherials</div>
    </div>
    <div class="container">
        <div class="categories">
            <p>Item</p>
            <p>Name</p>
            <p>Brand</p>
            <p>Rating</p>
            <p>Price</p>
        </div>
        <div class="necessary active-items">
        <div class="item-row">
            <div class="item">
                <p id="load">Motherboard</p>
            </div>
            <div class="item-choose">
                <button id="add-part"><a href="/choose/Motherboard">Choose A Motherboard +</a></button>
                <div class="selected-piece 0">
                    <p class="item-i"></p>
                    <p class="brand"></p>
                    <p class="rating"></p>
                    <p class="price"></p>
                    <button class="delete" onclick="deleteElement(this)">X</button>
                </div>
            </div>
        </div>
        <div class="item-row">
            <div class="item">
                <p id="load">Processor</p>
            </div>
            <div class="item-choose">
                <button id="add-part"><a href="/choose/CPU">Choose A Processor +</a></button>
                <div class="selected-piece 1">
                    <p class="item-i"></p>
                    <p class="brand"></p>
                    <p class="rating"></p>
                    <p class="price"></p>
                    <button class="delete" onclick="deleteElement(this)">X</button>
                </div>
            </div>
        </div>
        <div class="item-row">
            <div class="item">
                <p id="load">Memory</p>
            </div>
            <div class="item-choose">
                <button id="add-part"><a href="/choose/Memory">Choose A Memory +</a></button>
                <div class="selected-piece 2">
                    <p class="item-i"></p>
                    <p class="brand"></p>
                    <p class="rating"></p>
                    <p class="price"></p>
                    <button class="delete" onclick="deleteElement(this)">X</button>
                </div>
            </div>
        </div>
        <div class="item-row">
            <div class="item">
                <p id="load">Graphics Card</p>
            </div>
            <div class="item-choose">
                <button id="add-part"><a href="/choose/GPU">Choose A Graphics Card +</a></button>
                <div class="selected-piece 3">
                    <p class="item-i"></p>
                    <p class="brand"></p>
                    <p class="rating"></p>
                    <p class="price"></p>
                    <button class="delete" onclick="deleteElement(this)">X</button>
                </div>
            </div>
        </div>
        <div class="item-row">
            <div class="item">
                <p id="load">HDD</p>
            </div>
            <div class="item-choose">
                <button id="add-part"><a href="/choose/Drive">Choose A HDD +</a></button>
                <div class="selected-piece 4">
                    <p class="item-i"></p>
                    <p class="brand"></p>
                    <p class="rating"></p>
                    <p class="price"></p>
                    <button class="delete" onclick="deleteElement(this)">X</button>
                </div>
            </div>
        </div>
        </div>
        <div class="optional">
        <div class="item-row">
            <div class="item">
                <p id="load">Monitor</p>
            </div>
            <div class="item-choose">
                <button id="add-part"><a href="/choose/Display">Choose A Monitor +</a></button>
                <div class="selected-piece 5">
                    <p class="item-i"></p>
                    <p class="brand"></p>
                    <p class="rating"></p>
                    <p class="price"></p>
                    <button class="delete" onclick="deleteElement(this)">X</button>
                </div>
            </div>
        </div>
        <div class="item-row">
            <div class="item">
                <p id="load">Mouse</p>
            </div>
            <div class="item-choose">
                <button id="add-part"><a href="/choose/Mouse">Choose A Mouse +</a></button>
                <div class="selected-piece 6">
                    <p class="item-i"></p>
                    <p class="brand"></p>
                    <p class="rating"></p>
                    <p class="price"></p>
                    <button class="delete" onclick="deleteElement(this)">X</button>
                </div>
            </div>
        </div>
        <div class="item-row">
            <div class="item">
                <p id="load">Keyboard</p>
            </div>
            <div class="item-choose">
                <button id="add-part"><a href="/choose/Keyboard">Choose A Keyboard +</a></button>
                <div class="selected-piece 7">
                    <p class="item-i"></p>
                    <p class="brand"></p>
                    <p class="rating"></p>
                    <p class="price"></p>
                    <button class="delete" onclick="deleteElement(this)">X</button>
                </div>
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
    <script src="/js/partPicker.js"></script>