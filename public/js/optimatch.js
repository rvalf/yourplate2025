const optimatchQuestion = {
    1: {
        question: "What's your mood?",
        choices: [
            { id: 1, text: "Life's good, I'm glowing" },
            { id: 2, text: "Don't talk to me…" }
        ]
    },
    2: {
        question: "Craving for full meal or snack?",
        choices: [
            { id: 1, text: "Starving like a beast" },
            { id: 2, text: "Tiny snack will do" }
        ]
    },
    3: {
        question: "Your budget today?",
        choices: [
            { id: 1, text: "OMG I'm so poor now" },
            { id: 2, text: "I'm rich RICH" }
        ]
    },
    4: {
        question: "Prefer smth warm or refreshing?",
        choices: [
            { id: 1, text: "Cozy & warm feels" },
            { id: 2, text: "Cool & refreshing vibes" }
        ]
    },
    5: {
        question: "Soup-based or dry food?",
        choices: [
            { id: 1, text: "Swimming in soup" },
            { id: 2, text: "Dry land only" }
        ]
    },
    6: {
        question: "What kind of drink are you in the mood for?",
        choices: [
            { id: 1, text: "Tea time, baby" },
            { id: 2, text: "Juicy and fruity" },
            { id: 3, text: "Need that coffee hit" },
            { id: 4, text: "Milky comfort vibes" },
            { id: 5, text: "Just water, keepin' it simple" }
        ]
    }
};

const optimatchAnswer = {
    1: { result1: "Sop ayam bawang & Hot tea", result2: "Bubur ayam & Hot tea" },
    2: { result1: "Mie ayam & Orange juice", result2: "Bakso & Guava juice" },
    3: { result1: "Sayur sop & Hot coffee latte", result2: "Bubur kacang hijau & Hot coffee" },
    4: { result1: "Mie tektek & Original milk", result2: "Bubur kacang hijau & Choco milk" },
    5: { result1: "Mie ayam & Mineral water", result2: "Bubur ayam & Mineral water" },
    6: { result1: "Nasi goreng & Lemon tea", result2: "Nasi uduk & Ice tea" },
    7: { result1: "Pecel lele & Orange juice", result2: "Nasi uduk & Orange juice" },
    8: { result1: "Nasi padang & Ice americano", result2: "Capcay goreng & Ice cappucino" },
    9: { result1: "Nasi kucing & Vanilla milk", result2: "Nasi pecel & Ice choco milk" },
    10: { result1: "Nasi goreng & Mineral water", result2: "Sayur asem & Lemon tea" },
    11: { result1: "Pindang ikan & Ice tea", result2: "Soto betawi & Apple tea" },
    12: { result1: "Soto ayam & Orange squash", result2: "Sayur asem & Orange juice" },
    13: { result1: "Pindang ikan & Ice coffee latte", result2: "Cah kangkung & Ice americano" },
    14: { result1: "Pecak ayam & Original milk", result2: "Sayur laksa kuning & Ice milkshake" },
    15: { result1: "Soto bening & Mineral water", result2: "Cah kangkung & Mineral water" },
    16: { result1: "Vegetable salad & Hot tea", result2: "Nasi bakar & Ice tea" },
    17: { result1: "Ayam rica rica & Lemon juice", result2: "Nasi bakar & Orange juice" },
    18: { result1: "Sambal tongkol & Ice macchiato coffee", result2: "Gado-gado & Ice americano" },
    19: { result1: "Ayam rica rica & Ice vanilla milk", result2: "Gado-gado & Oat milk" },
    20: { result1: "Vegetable salad & Mineral water", result2: "Nasi bakar & Mineral water" },
    21: { result1: "Sop iga & Ice tea", result2: "Tongseng & Ice tea" },
    22: { result1: "Sop iga & Guava juice", result2: "Tongseng & Gula aren coffee" },
    23: { result1: "Sop iga & Hot coffee", result2: "Pecak ikan mujair & Ice coffee latte" },
    24: { result1: "Gulai kambing & Oat milk", result2: "Sop buntut & Yogurt" },
    25: { result1: "Gulai kambing & Mineral water", result2: "Sop buntut & Mineral water" },
    26: { result1: "Nasi goreng seafood & Ice tea", result2: "Bebek peking & Lemon tea" },
    27: { result1: "Nasi goreng seafood & Orange juice", result2: "Bebek rica rica & Orange juice" },
    28: { result1: "Nasi padang & Ice americano", result2: "Bebek rica rica & Kopi tubruk" },
    29: { result1: "Nasi padang & Ice choco milk", result2: "Dimsum & Almond milk" },
    30: { result1: "Nasi goreng seafood & Mineral water", result2: "Dimsum & Mineral water" },
    31: { result1: "Soto kari & Ice tea", result2: "Bakso malang & Lemon tea" },
    32: { result1: "Hotpot & Mango juice", result2: "Bakso malang & Tomato juice" },
    33: { result1: "Soto mie & Regal coffee", result2: "Sapo tahu & Iced pandan coffee" },
    34: { result1: "Laksa & Vanilla milkshake", result2: "Soto Betawi & Iced coffee milk palm sugar" },
    35: { result1: "Ikan kuah asam pedas & Mineral water", result2: "Soto Betawi & Mineral water" },
    36: { result1: "Ayam sambal matah & Thai tea", result2: "Chicken katsu & Mango smoothie" },
    37: { result1: "Ayam geprek & Orange juice", result2: "Chicken katsu & Iced avocado coffee" },
    38: { result1: "Iga bakar & Ice cappucino", result2: "Chicken popcorn & Hazelnut milk iced coffee" },
    39: { result1: "Udang sambal matah & Milkshake", result2: "Gulai ikan kakap & Yogurt" },
    40: { result1: "Seafood fried rice & Mineral water", result2: "Chicken popcorn & Mineral water" },
    41: { result1: "Bubur kacang hijau & Hot tea", result2: "Tekwan & Wedang ronde" },
    42: { result1: "Cilok kuah & Orange juicy", result2: "Baso aci & Hot tea" },
    43: { result1: "Baso cuanki & Cappucino", result2: "Baso aci & Black coffee" },
    44: { result1: "Kolak & Milkshake", result2: "Mie Bangladesh & Hot chocolate" },
    45: { result1: "Tahu gejrot & Mineral water", result2: "Mie Bangladesh & Mineral water" },
    46: { result1: "Cireng isi & Hot tea", result2: "Tahu bakso & Thai tea" },
    47: { result1: "Corndog & Strawberry juicy", result2: "Tahu bakso & Fruit infused water" },
    48: { result1: "Cheese roll & Hazelnut coffee", result2: "Tahu bakso & Cappucino" },
    49: { result1: "Corndog & Milkshake", result2: "Platter & Ginger milk" },
    50: { result1: "Takoyaki & Mineral water", result2: "Toast & Mineral water" },
    51: { result1: "Cilok kuah & Lychee tea", result2: "Seblak & Lychee tea" },
    52: { result1: "Bubur sumsum & Ice lemon tea", result2: "Pempek & Iced pandan coffee" },
    53: { result1: "Kolak & Black coffee", result2: "Pempek & Banana milk" },
    54: { result1: "Kolak & Cookies & cream", result2: "Seblak & Mineral water" },
    55: { result1: "Mie & Mineral water", result2: "Gorengan & Lemon tea" },
    56: { result1: "French fries & Lemon tea", result2: "Gorengan & Orange juice" },
    57: { result1: "Tahu crispy & Avocado juicy", result2: "Spicy basreng & Guava juice" },
    58: { result1: "Tahu crispy & Black coffee", result2: "Mie gacoan & Hazelnut coffee latte" },
    59: { result1: "Basreng & Matcha latte", result2: "Mie gacoan & Strawberry milk" },
    60: { result1: "Kue pukis & Mineral water", result2: "Mie gacoan & Mineral water" },
    61: { result1: "Bihun & Hot tea", result2: "Pempek & Tea" },
    62: { result1: "Bihun & Orange juicy", result2: "Pangsit kuah & Avocado juice" },
    63: { result1: "Kwetiaw kuah & Cappucino", result2: "Pangsit kuah & Coffee milk" },
    64: { result1: "Kwetiaw kuah & Vanilla milkshake", result2: "Pangsit kuah & Banana milk" },
    65: { result1: "Zuppa soup & Mineral water", result2: "Tom yam & Mineral water" },
    66: { result1: "Bakpao & Hot plain tea", result2: "Dimsum & Teh tarik" },
    67: { result1: "Pancake & Smoothies", result2: "Churros & Mojito" },
    68: { result1: "Burger & Coffee latte", result2: "Croffle & Cappucino" },
    69: { result1: "Muffin & Milktea", result2: "Donut & Chocolate milk" },
    70: { result1: "Cinnamon roll & Bajigur", result2: "Pizza & Soda" },
    71: { result1: "Puding & Olong tea", result2: "Manggo sago & Sparkling tea" },
    72: { result1: "Tanghulu & Dragon fruit juice", result2: "Fruit salad & Strawberry juice" },
    73: { result1: "Pancong & Affogato", result2: "Gelato & Americano" },
    74: { result1: "Creme brulee & Full cream milk", result2: "Spring roll fruit & Milktea" },
    75: { result1: "Smoothies & Infused water", result2: "Ice cream float & Soda" },
    76: { result1: "Cookies bomb & Chamomile tea", result2: "Mochi ice cream & Jasmine tea" },
    77: { result1: "Macaron & Orange juice", result2: "Fruit salad & Manggo juice" },
    78: { result1: "Crepes & Smoothies", result2: "Macaron & Coffee latte" },
    79: { result1: "Mille crepes & Soymilk", result2: "Frozen yogurt bark & Strawberry milk" },
    80: { result1: "Candied manggo & Lemon tea", result2: "Egg soup & Plain tea" },
    81: { result1: "Chicken soup & Ginger tea", result2: "Sayur lodeh & Jasmine tea" },
    82: { result1: "Lontong sayur & Hot orange juice", result2: "Tofu soup tomato & Avocado juice" },
    83: { result1: "Sayur asem & Black coffee", result2: "Sarden & Arabica coffee" },
    84: { result1: "Soup kimlo & Oatmilk", result2: "Corn krim soup & Fullcream milk" },
    85: { result1: "Instan noodle soup with egg & Mineral water", result2: "Sayur bayam & Mineral water" },
    86: { result1: "Tempe orek & Plain tea", result2: "Tahu tempe bacem & Olong tea" },
    87: { result1: "Pecel lele & Ice orange juice", result2: "Fried rice & Hot honey lemon" },
    88: { result1: "Ikan pindang goreng & Black coffee", result2: "Rice omelette & Palm sugar coffee" },
    89: { result1: "Terong balado & Vanilla milk", result2: "Nasi kuning & Ginger milk" },
    90: { result1: "Nasi uduk & Infused water", result2: "Nasi bakar & Water" },
    91: { result1: "Gultik & Plain tea", result2: "Eggs with balado sauce & Lemon tea" },
    92: { result1: "Gado-gado & Avocado juice", result2: "Ketoprak & Orange juice" },
    93: { result1: "Bakmi kuah & Ice coffee latte", result2: "Ikan kuah kuning & Black coffee" },
    94: { result1: "Sop soun bakso & Oatmilk", result2: "Groente soup & Fresh milk" },
    95: { result1: "Bakmi kuah & Mineral water", result2: "Sayur asem & Water" },
    96: { result1: "Spicy chicken geprek & Sweet tea", result2: "Cumi sambal pedas & Plain tea" },
    97: { result1: "Sate ayam with lontong & Pineapple juice", result2: "Nasi rames & Lemon tea" },
    98: { result1: "Nasi ayam penyet & Black coffee", result2: "Nasi rames & Iced milk coffee" },
    99: { result1: "Bebek sambal hijau & Milk tea", result2: "Nasi rames & Milk tea" },
    100: { result1: "Nasi ayam geprek & Mineral water", result2: "Nasi goreng & Mineral water" },
    101: { result1: "Kari tunjang & Green tea original", result2: "Bakso & Lemon tea" },
    102: { result1: "Opor ayam & Orange juice", result2: "Bakso & Fruit juice" },
    103: { result1: "Kari tunjang & Ice americano", result2: "Bakso & Iced milk coffee" },
    104: { result1: "Kwetiaw kuah sapi & Milk tea", result2: "Sapo tahu & Thai tea" },
    105: { result1: "Soto babat & Mineral water", result2: "Sapo tahu & Mineral water" },
    106: { result1: "Rendang & Teh tawar hangat", result2: "Fried rice & Tea" },
    107: { result1: "Nasi padang & Orange juice", result2: "Sate ayam/kambing & Orange juice" },
    108: { result1: "Burger & Hazelnut coffee", result2: "Sushi & Milk coffee" },
    109: { result1: "Iga bakar & Mineral water", result2: "Chicken steak & Original milk" },
    110: { result1: "Pasta & Lemon tea", result2: "Beef steak & Mineral water" },
    111: { result1: "Sop buntut & Iced tea", result2: "Beef steak & Lychee tea" },
    112: { result1: "Soto lamongan & Tomato juice", result2: "Sop iga & Ice lemonade" },
    113: { result1: "Ikan kuah kuning & Ice black coffee", result2: "Tumis sotong & Milk coffee" },
    114: { result1: "Ramen & Milk tea", result2: "Sop kaki kambing & Thai tea" },
    115: { result1: "Ramen & Mineral water", result2: "Sop kaki kambing & Mineral water" },
    116: { result1: "Ayam taliwang & Tea", result2: "Beef steak & Iced tea" },
    117: { result1: "Ayam taliwang & Orange juice", result2: "Fried chicken & Avocado juice" },
    118: { result1: "Iga bakar & Black coffee", result2: "Fried chicken & Milk coffee" },
    119: { result1: "Chicken katsu & Milk tea", result2: "Ayam bakar & Thai tea" },
    120: { result1: "Chicken katsu & Mineral water", result2: "Sapi lada hitam & Mineral water" },
    121: { result1: "Tahu gejrot & Hot tea", result2: "Seblak & Tea" },
    122: { result1: "Wonton kuah & Orange juice", result2: "Seblak & Juice" },
    123: { result1: "Tekwan & Coffee latte", result2: "Biji salak & Milk coffee" },
    124: { result1: "Pempek & Milk tea", result2: "Bakso cuanki & Thai tea" },
    125: { result1: "Pempek & Mineral water", result2: "Bakso cuanki & Mineral water" },
    126: { result1: "Tahu bulat & Teh tarik", result2: "Fried banana & Tea" },
    127: { result1: "Roti bakar & Orange juice", result2: "Cut fruit & Mango squash" },
    128: { result1: "Kue putu & Black coffee", result2: "Fried banana & Black coffee" },
    129: { result1: "Kue cubit & Hot choco milk", result2: "Cookies & Milk" },
    130: { result1: "Bola bola ubi & Bottled water", result2: "Onde onde & Wedang ronde" },
    131: { result1: "Cimplo & Es teh cincau", result2: "Tutut & Teh lemon madu" },
    132: { result1: "Ice cream sundae & Es jeruk", result2: "Tahu gejrot & Avocado juice" },
    133: { result1: "Batagor kuah & Kopi susu manis", result2: "Pempek & Milk coffee" },
    134: { result1: "Bubur kacang hijau & Milkshake", result2: "Bakwan kuah malang & Taro milk" },
    135: { result1: "Cilok kuah & Soda gembira", result2: "Bubur sumsum & Cold water" },
    136: { result1: "Keripik kaca & Peach tea", result2: "Pisang goreng & Ice lemon tea" },
    137: { result1: "Pisang nugget & Peach squash", result2: "Donut & Mango juice" },
    138: { result1: "Keripik kentang & Black coffee", result2: "Cheesecuit & Black coffee" },
    139: { result1: "Es krim roti & Vanila milk", result2: "Keripik singkong & Chocolate milk" },
    140: { result1: "Sandwich ice cream & Bottled water", result2: "Rujak & Soda gembira" },
    141: { result1: "Tteokbokki & Mango juice", result2: "Bakwan kuah & Matcha green tea" },
    142: { result1: "Odeng & Hot orange juice", result2: "Sup kerang dara & Avocado juice" },
    143: { result1: "Suki seafood & Caffe latte", result2: "Bubur ketan hitam & Hot macchiato" },
    144: { result1: "Bakso afung & Susu keledai hangat", result2: "Serabi kuah & Choco milk" },
    145: { result1: "Suki seafood & Caffe latte", result2: "Bakso afung & Bakrek" },
    146: { result1: "Croissant keju & Teh earl grey", result2: "Toast & Ocha tea" },
    147: { result1: "Hottang & Green guava juicer", result2: "Corndog & Mango juice" },
    148: { result1: "Kebab & Matcha latte", result2: "Popcorn & Milkshake" },
    149: { result1: "Shrimp tempura & Caramel latte", result2: "Almond roasted & Cappucino" },
    150: { result1: "Lapis legit & Wedang ronde", result2: "Kebab & Wedang jahe" },
    151: { result1: "Ice cream yogurt & Bubble tea", result2: "Pangsit kuah & Teh brown sugar tea" },
    152: { result1: "Sop duren & Lemon squash", result2: "Silky puding & Ice mango yakult" },
    153: { result1: "Bubur ketan hitam & Ice coffee latte", result2: "Dessert box & Ice americano" },
    154: { result1: "Gelato & Es lumut", result2: "Bingsoo & Vanila oatmilk" },
    155: { result1: "Silky puding & Es teler", result2: "Bingsoo & Es cendol" },
    156: { result1: "Kastengel & Ice greentea", result2: "Chocolate bar & Jasmine tea" },
    157: { result1: "Nastar & Starfruit juice", result2: "Mochi & Fruit punch" },
    158: { result1: "Cupcake & Ice cappucino", result2: "Brownis & Ice coffee latte" },
    159: { result1: "Strawbery shortcake & Es susu milo", result2: "Nougat narabis & Ice choco milk" },
    160: { result1: "Macaroni schotel & Soda sprite", result2: "Fruit chips & Infused water" },
};

let currentQuestion = 1;
let answers = [];

function loadQuestion() {
    const q = optimatchQuestion[currentQuestion];
    if (!q) {
        // Semua pertanyaan selesai
        const code = answers.join('');
        const product = answers.reduce((a, b) => a * b, 1);
        const resultText = optimatchAnswer[product] || { result1: "No match found.", result2: "" };

        // Pilih result1 atau result2 secara random
        const randomResult = Math.random() < 0.5 ? resultText.result1 : resultText.result2 || resultText.result1;

        // Tampilkan result container
        document.getElementById("optimatchContainer").style.display = "none";

        // Masukkan hasil ke result div
        const resultContainer = document.getElementById("optimatchResult");
        resultContainer.style.display = "block";

        resultContainer.innerHTML = `
          <h4 class="mb-4">Your Match</h4>
          <div class="mb-4">
            <img src="images/food-icon.png" style="width: 5%;">
          </div>
          <div class="mb-4">
            <div class="resultOpt-container mx-auto rounded-4 px-4 py-3">
              <h5>${randomResult}</h5>
            </div>
          </div>
          <div class="mt-5 mb-5">
              <h5>Search your comfort food at <span><a href="/marketplace">Yourplate Marketplace</a></span></h5>
          </div>
        `;

        return;
    }

    // Update soal
    document.getElementById("optimatchQuestion").innerText = `${q.question}`;

    // Generate pilihan
    const choiceContainer = document.getElementById("optimatchChoices");
    choiceContainer.innerHTML = ''; // clear

    q.choices.forEach(choice => {
        const btn = document.createElement("button");
        btn.className = "btn btn-optimatch mb-4 d-block mx-auto";
        btn.innerText = choice.text;
        btn.onclick = () => {
            answers.push(choice.id);
            currentQuestion++;
            loadQuestion();
        };
        choiceContainer.appendChild(btn);
    });
}

// Start quiz pertama kali
loadQuestion();
