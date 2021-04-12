<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'id' => 1,
            'title' => 'Fender American Vintage \'58 Telecaster MN 2TSB',
            'price' => 2256,
            'quantity' => 50,
            'image' => 'uploads/guitar-el-1.jpg',
            'category_id' => 1,
            'description' => 'The American Vintage \'58 Telecaster® harkens back to early 1958, when the Telecaster graduated from its original U-shaped neck profile—a real handful—to a still-large but more comfortable D-shape for its maple neck. Other spot-on early-\'58 touches are here too, such as a lightweight ash body, staggered bridge pickup pole magnets, solid steel "barrel" bridge saddles, a single-ply white pickguard, "top-hat" switch tip, flat-top knurled aluminum chrome control knobs and more. '
        ]);

        DB::table('products')->insert([
            'id' => 2,
            'title' => 'Fender Eric Clapton Stratocaster MN TRD',
            'price' => 3284,
            'quantity' => 30,
            'image' => 'uploads/guitar-el-2.jpg',
            'category_id' => 1,
            'description' => 'Fender Eric Clapton Stratocaster electric guitar is a complete hit and atmosphere for all fans of the famous "Slowhand". As the "Cream" of our offer, this guitar has special features, including a trio of Fender Vintage Noiseless pickups, including a powerful mid-boost and TBX wheel, which make it one of the most versatile instruments in our offer. Other features include a special soft V-shaped maple neck and a fixed original synchronized tremolo bridge.'
        ]);

        DB::table('products')->insert([
            'id' => 3,
            'title' => 'Squier By Fender Bullet Stratocaster with Tremolo',
            'price' => 152,
            'quantity' => 100,
            'image' => 'uploads/guitar-el-3.jpg',
            'category_id' => 1,
            'description' => 'Our Bullet Strat with tremolo is a simple, affordable and practical guitar designed for beginners and students. The classic style is complemented by the addition of a Humbuc pickup in the HSS configuration. Other features include a five-pole switch, synchronized tremolo, maple neck with a laurel fingerboard with a 21-threshold.'
        ]);

        DB::table('products')->insert([
            'id' => 4,
            'title' => 'Yamaha A3M Natural',
            'price' => 951,
            'quantity' => 40,
            'image' => 'uploads/guitar-ac-1.jpg',
            'category_id' => 2,
            'description' => 'The A3M features all-solid Mahogany back and sides with hand-selected premium Sitka Spruce top. Yamaha\'s original concert body style is matched to the flagship System 63 SRT pickup and preamp combination for the most natural, responsive amplified tone available.'
        ]);

        DB::table('products')->insert([
            'id' => 5,
            'title' => 'Fender CD-140SCE BLK',
            'price' => 356,
            'quantity' => 60,
            'image' => 'uploads/guitar-ac-2.jpg',
            'category_id' => 2,
            'description' => 'Upgrades include a new tortoise shell pickguard (natural finish model) or black pickguard (black finish model), new mother-of-pearl rosette design, new compensated rosewood bridge design, aged bridge pins with black dots, mother-of-pearl Fender logo headstock inlay, and smaller (3 mm) dot fingerboard inlays. Features include scalloped X bracing, 20-fret rosewood fingerboard, dual-action truss rod and Fishman® Presys™ pickup system with active onboard preamp, tuner, volume and tone controls and low-battery indicator light'
        ]);

        DB::table('products')->insert([
            'id' => 6,
            'title' => 'Squier By Fender SA-105 Sunburst',
            'price' => 96,
            'quantity' => 100,
            'image' => 'uploads/guitar-ac-3.jpg',
            'category_id' => 2,
            'description' => 'The welcome return of the Squier acoustic is here in the top-notch form of the SA-105. A sweet-sounding, great-feeling dreadnought that has plenty of vibe and won’t break the bank, it features a laminated basswood top, back and sides, with a dark-stained maple fingerboard and bridge. Other great features include quartersawn "X" bracing, black neck and body binding, comfortably shaped neck profile and a black pickguard.'
        ]);

        DB::table('products')->insert([
            'id' => 7,
            'title' => 'Fender Marcus Miller Jazz Bass V MN 3TS',
            'price' => 2856,
            'quantity' => 30,
            'image' => 'uploads/bass-1.jpg',
            'category_id' => 3,
            'description' => 'The Fender Marcus Miller Jazz Bass five-string guitar is equally amazing. It features an ash body, a distinctive black mask, a one-piece maple C-profile neck with a radius of 7.25 inches, white binding, white pearl block inlays and a satin finish (glossy finish on the head with Miller\'s signature) and Posifex graphite bars to strengthen the neck. Tone magic comes from a pair of vintage-style Jazz Bass single-coil pickups, an 18v active preamplifier, a two-band active equalizer with an active / passive switch. Other features include a chrome pickup cover , embossed chrome volume capspots and black Jazz Bass caps on tons of controls, Badass Bass II bridge and an asymmetrical plate on the neck with 5 screws.'
        ]);

        DB::table('products')->insert([
            'id' => 8,
            'title' => 'Squier By Fender Classic Vibe Precision Bass 50s',
            'price' => 495,
            'quantity' => 60,
            'image' => 'uploads/bass-2.jpg',
            'category_id' => 3,
            'description' => 'Delivering an authentic ’50s-era bass experience in sound, look and feel, the all-new Classic Vibe Precision Bass ’50s boasts a gorgeous new Butterscotch Blonde finish on a pine body. Features include a vintage-tint gloss maple neck with 20 medium-jumbo frets and modern 9.5” fretboard radius, custom “original” single-coil pickup that delivers warm and earthy old-school Precision Bass tone, traditional single-ply black pickguard and “HiMass” bridge with four brass barrel saddles.'
        ]);

        DB::table('products')->insert([
            'id' => 9,
            'title' => 'Yamaha RBX170 Dark Blue Metallic',
            'price' => 248,
            'quantity' => 100,
            'image' => 'uploads/bass-3.jpg',
            'category_id' => 3,
            'description' => 'The Yamaha RBX170 bass guitar has the same body as the RBX374 and a neck made of quality maple with a rosewood fingerboard . It has two volume controls, global tone control and J and split-style pickups. These basses are the perfect choice for the player who thinks about the value of the instrument and wants the quality of top production.'
        ]);

        DB::table('products')->insert([
            'id' => 10,
            'title' => 'Sonor SEF 11 Stage 2 Set WM Piano Black 11234',
            'price' => 1459,
            'quantity' => 25,
            'image' => 'uploads/drums-1.jpg',
            'category_id' => 4,
            'description' => 'The SONOR Select Force Series is the pinnacle of the new Force range. The Select Series is a set for every drummer: designed especially for advanced and semi-professional drummers, Select Force drum sets can also be an interesting alternative for professional drummers. A wide array of pre-configured sets, components and the very latest features from the professionals’ series make SONOR Select Force sets a real hit!'
        ]);

        DB::table('products')->insert([
            'id' => 11,
            'title' => 'YAMAHA SCB0F5 RAVEN BLACK',
            'price' => 951,
            'quantity' => 60,
            'image' => 'uploads/drums-2.jpg',
            'category_id' => 4,
            'description' => 'Classic Yamaha drums, now made from 100% birch. In addition to great sound, all three sets of components, kits and separate components are now available in 8 different colors. When it comes to  hardware , Yamaha is unsurpassed in classic style with its bass drum, and the rest is taken from the massive 700 series. This set sounds like a typical Yamaha, strong, warm, dynamic and precise.'
        ]);

        DB::table('products')->insert([
            'id' => 12,
            'title' => 'YAMAHA SCN0F5 MAT CRANBERY RED',
            'price' => 1020,
            'quantity' => 100,
            'image' => 'uploads/drums-3.jpg',
            'category_id' => 4,
            'description' => 'Borrowing from our legendary Recording Custom drum sets, the world-famous Yamaha birch sound is now available in an affordable package. From the YESS mounting system to the tom ball clamps to the rich lacquer finishes, the Stage Custom Birch encompasses value, quality, and craftsmanship.'
        ]);

        DB::table('products')->insert([
            'id' => 13,
            'title' => 'Yamaha GB1K Polished Ebony',
            'price' => 13856,
            'quantity' => 25,
            'image' => 'uploads/piano-1.jpg',
            'category_id' => 5,
            'description' => 'GB1K, Yamaha’s most compact and affordable concert piano, is a popular choice for locations where space is limited, but its sound is reminiscent of many much larger models. Unsurpassed in their beauty and musical range, concert pianos represent a top achievement in the art of piano making. These instruments are synonymous with quality, and with over a hundred years of accumulated expertise, Yamaha is the first synonym for concert piano'
        ]);

        DB::table('products')->insert([
            'id' => 14,
            'title' => 'Yamaha B2 Polished Ebony',
            'price' => 521,
            'quantity' => 50,
            'image' => 'uploads/piano-2.jpg',
            'category_id' => 5,
            'description' => 'With its larger dimensions and more massive construction, the new Yamaha B2 delivers superior sound, depth and power. For an ambitious contractor who has a limited budget, there is no better instrument.'
        ]);

        DB::table('products')->insert([
            'id' => 15,
            'title' => 'William Wagner PRELUDE BLACK',
            'price' => 335,
            'quantity' => 100,
            'image' => 'uploads/piano-3.jpg',
            'category_id' => 5,
            'description' => 'William Wagner are the best affordable pianos for beginners and hobbyists. A great combination of realistic piano samples and a precise feeling of playing an acoustic piano at a very good price.'
        ]);

        DB::table('products')->insert([
            'id' => 16,
            'title' => 'Korg Kronos 2 61',
            'price' => 2750,
            'quantity' => 25,
            'image' => 'uploads/keyboard-1.jpg',
            'category_id' => 6,
            'description' => 'KRONOS restores the magic, the thrill, and the promise that only a visionary new instrument can provide. And KRONOS delivers on that promise. Every resources and technology of service to the modern musician has been refined, perfected, and integrated into a single instrument, and is available on demand. Multiple state-of-the-art sound generation techniques represent the pinnacle of software realization. Onboard effects open the door to processing any internal or external audio source with dazzling results.'
        ]);

        DB::table('products')->insert([
            'id' => 17,
            'title' => 'Yamaha PSR-A2000',
            'price' => 1586,
            'quantity' => 50,
            'image' => 'uploads/keyboard-2.jpg',
            'category_id' => 6,
            'description' => 'Based on Yamaha’s premium S-Series keyboards, the new PSR-A2000 arranger provides the level of flexibility expected of a premium instrument. With an optimized user interface and a wealth of new features and sounds, the PSR-A2000 guarantees the fulfillment of the wishes and needs of performers of a wide range of genres. With a wide range of Arabic, Turkish and Greek styles, the PSR-A2000 can also be expanded to provide new features and a variety of new sounds and styles that will be available later.'
        ]);

        DB::table('products')->insert([
            'id' => 18,
            'title' => 'Korg PA-600',
            'price' => 815,
            'quantity' => 100,
            'image' => 'uploads/keyboard-3.jpg',
            'category_id' => 6,
            'description' => 'The Pa600 is a brilliant Professional Arranger that distills the sonic essence and functionality of the Pa series into a compact and affordable new instrument. Like its big brothers - the Pa800 and the Pa3X - the Pa600 uses our RX (Real eXperience) and DNC (Defined Nuance Control) technology to deliver sound quality that\'s unprecedented in an arranger keyboard.'
        ]);

        DB::table('products')->insert([
            'id' => 19,
            'title' => 'Yamaha V5-SC 4/4',
            'price' => 534,
            'quantity' => 30,
            'image' => 'uploads/violin-1.jpg',
            'category_id' => 7,
            'description' => 'Yamaha V5SC violin is intended for students, and is characterized by high-quality material and spruce front panel. Each instrument is handmade using the same traditional methods by which the most expensive violins are constructed. This quality instrument is designed, dimensioned and priced to give the student a great start. '
        ]);

        DB::table('products')->insert([
            'id' => 20,
            'title' => 'Stagg VN 4/4',
            'price' => 108,
            'quantity' => 60,
            'image' => 'uploads/violin-2.jpg',
            'category_id' => 7,
            'description' => 'Traditionally handmade from selected wood and by skilled craftsmen - built from quality materials, these violins come with a bow and wax in their suitcase. The features of the Stagg 4/4 violin are: spruce top plate, maple sides and back, maple neck, metal bridge with 4 fine pins, ebony fingerboard.'
        ]);

        DB::table('products')->insert([
            'id' => 21,
            'title' => 'Belmonte Classical Series 1/2',
            'price' => 92,
            'quantity' => 100,
            'image' => 'uploads/violin-3.jpg',
            'category_id' => 7,
            'description' => 'Yamaha V5SC violin is intended for students, and is characterized by high-quality material and spruce front panel. Each instrument is handmade using the same traditional methods by which the most expensive violins are constructed. This quality instrument is designed, dimensioned and priced to give the student a great start.'
        ]);
    }
}