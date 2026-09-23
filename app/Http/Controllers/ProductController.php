<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * --------------------------------------------------------------------------
     * Product Data
     * --------------------------------------------------------------------------
     *
     * Central source of product information for:
     * - Import landing page
     * - Export landing page
     * - Product catalog
     * - Product detail page
     */
    public function products(): array
    {
        return [
            /*
            |--------------------------------------------------------------------------
            | IMPORT PRODUCTS
            |--------------------------------------------------------------------------
            */

            [
                'code' => 'MM-SF-01',
                'number' => '01',
                'name' => 'Science And Mathematics Equipments',
                'type' => 'import',
                'description' => 'Durable classroom furniture designed for schools, government programs, and educational institutions.',
                'long_description' => 'Our school furniture line includes chairs, desks, cabinets, and storage solutions built to withstand daily classroom use. Sourced to meet DepEd and government procurement specifications, with options for ergonomic design and bulk institutional orders.',
                'icon' => '▣',
                'category' => 'SME',
                'image' => 'products/science_kit_cover_photo.png',

                'brands' => [
                    [
                        'name' => 'STORAGE CABINETS',
                        'logo' => 'brands/storage cabinet.png',
                        'image' => 'brands/storage cabinet.png',
                    ],
                    [
                        'name' => 'Basic Science kit',
                        'logo' => 'brands/scikit_flatlay_portrait.png',
                        'image' => 'brands/scikit_flatlay_portrait.png',
                    ],
                    [
                        'name' => 'Science And Mathematics Equipments',
                        'logo' => 'brands/sme.png',
                        'image' => 'brands/sme.png',
                    ],
                    [
                        'name' => 'SCIENCE DEVICES, INSTRUMENTS AND MEASURING TOOLS - Matter',
                        'logo' => 'brands/SCIENCE DEVICES INSTRUMENTS AND MEASURING TOOLS .png',
                        'image' => 'brands/SCIENCE DEVICES INSTRUMENTS AND MEASURING TOOLS .png',
                    ],
                    [
                        'name' => 'SCIENCE DEVICES, INSTRUMENTS AND MEASURING TOOLS - EARTH AND SPACE, AND LIVING THINGS',
                        'logo' => 'brands/sme2.png',
                        'image' => 'brands/sme2.png',
                    ],
                    [
                        'name' => 'Mathematical Manipulatives',
                        'logo' => 'brands/Mathematical Manipulatives.png',
                        'image' => 'brands/Mathematical Manipulatives.png',
                    ],
                    [
                        'name' => 'Mathematical Tools and Instrument',
                        'logo' => 'brands/Mathematical Tools and Instrument.png',
                        'image' => 'brands/Mathematical Tools and Instrument.png',
                    ],
                    [
                        'name' => 'Models: Earth and other Heavenly Bodies',
                        'logo' => 'brands/Earth and other Heavenly Bodies.png',
                        'image' => 'brands/Earth and other Heavenly Bodies.png',
                    ],
                    [
                        'name' => 'Models: The Human Anatomy',
                        'logo' => 'brands/The Human Anatomy.png',
                        'image' => 'brands/The Human Anatomy.png',
                    ],
                    [
                        'name' => 'Models: Other Biological Structures and Species',
                        'logo' => 'brands/Other Biological Structures and Species.png',
                        'image' => 'brands/Other Biological Structures and Species.png',
                    ],
                    [
                        'name' => 'Models: Molecular Geometry',
                        'logo' => 'brands/Molecular Geometry.png',
                        'image' => 'brands/Molecular Geometry.png',
                    ],
                    [
                        'name' => 'Force, Motion, and energy kits',
                        'logo' => 'brands/Force Motion and energy kits.png',
                        'image' => 'brands/Force Motion and energy kits.png',
                    ],
                ],
                
            ],

            [
                'code' => 'MM-TB-04',
                'number' => '04',
                'name' => 'Textbooks',
                'type' => 'import',
                'description' => 'Educational books and learning resources supporting curriculum and institutional requirements.',
                'long_description' => 'Curriculum-aligned textbooks and supplementary learning resources sourced from approved publishers, supporting institutional and government education programs at scale.',
                'icon' => '▤',
                'category' => 'Learning Materials',
                'image' => 'products/Textbook_Cover.png',

            ],

            [
                'code' => 'MM-MT-05',
                'number' => '05',
                'name' => 'Manipulative Toys',
                'type' => 'import',
                'description' => 'Hands-on educational materials designed to support early learning and classroom development.',
                'long_description' => 'Early-learning manipulatives and developmental toys designed to support motor skills, cognitive development, and classroom engagement for pre-school and early elementary programs.',
                'icon' => '○',
                'category' => 'Early Learning',
                'image' => 'brands/manipulative_toys_1.png',

                'brands' => [
                    [
                        'name' => 'Table Blocks (Wood)',
                        'logo' => 'brands/manipulative_toys_1.png',
                        'image' => 'brands/manipulative_toys_1.png',
                    ],
                    [
                        'name' => 'Pattern Blocks (Wood)',
                        'logo' => 'brands/manipulative_toys_2.png',
                        'image' => 'brands/manipulative_toys_2.png',
                    ],
                    [
                        'name' => 'Filipino Alphabet Puzzle Lowercase Letters (Wood)',
                        'logo' => 'brands/manipulative_toys_3.png',
                        'image' => 'brands/manipulative_toys_3.png',
                    ],
                    [
                        'name' => 'Filipino Alphabet Puzzle Uppercase Letters (Wood)',
                        'logo' => 'brands/manipulative_toys_4.png',
                        'image' => 'brands/manipulative_toys_4.png',
                    ],
                    [
                        'name' => 'Shape Sorter (Wood)',
                        'logo' => 'brands/manipulative_toys_5.png',
                        'image' => 'brands/manipulative_toys_5.png',
                    ],
                    [
                        'name' => 'PlayLearn5',
                        'logo' => 'brands/manipulative_toys_6.png',
                        'image' => 'brands/manipulative_toys_6.png',
                    ],
                    [
                        'name' => 'Shape Lacing Cards (Wood)',
                        'logo' => 'brands/manipulative_toys_7.png',
                        'image' => 'brands/manipulative_toys_7.png',
                    ],
                    [
                        'name' => 'PlayLearn7',
                        'logo' => 'brands/manipulative_toys_8.png',
                        'image' => 'brands/manipulative_toys_8.png',
                    ],
                ],
            ],

            [
                'code' => 'MM-FUR-04',
                'number' => '04',
                'name' => 'Furniture',
                'type' => 'import',
                'description' => 'Hands-on educational materials designed to support early learning and classroom development.',
                'long_description' => 'Early-learning manipulatives and developmental toys designed to support motor skills, cognitive development, and classroom engagement for pre-school and early elementary programs.',
                'icon' => 'F',
                'category' => 'Learners Table and Chair Set',
                'image' => 'brands/furniture_1.jpg',

                'brands' => [
                    [
                        'name' => 'Learners Table and Chair Set (Wood) (1)',
                        'logo' => 'brands/furniture_1.jpg',
                        'image' => 'brands/furniture_1.jpg',
                    ],
                    [
                        'name' => 'Learners Table and Chair Set (Wood) (2)',
                        'logo' => 'brands/furniture_2.png',
                        'image' => 'brands/furniture_2.png',
                    ],
                    [
                        'name' => 'Learners Table and Chair Set (Wood) (3)',
                        'logo' => 'brands/furniture_3.jpg',
                        'image' => 'brands/furniture_3.jpg',
                    ],
                    [
                        'name' => 'Learners Table and Chair Set (Wood) (4)',
                        'logo' => 'brands/furniture_4.jpg',
                        'image' => 'brands/furniture_4.jpg',
                    ],
                ],
            ],
            /*
            |--------------------------------------------------------------------------
            | EXPORT PRODUCTS
            |--------------------------------------------------------------------------
            */

            [
                'code' => 'MI-FUR-01',
                'number' => '01',
                'name' => 'Furniture',
                'type' => 'export',
                'description' => 'Durable furniture designed for residential and commercial use, including bedroom, living room, and office furniture.',
                'long_description' => 'We design and manufacture a full range of furniture — from beds and sofas to desks and chairs — supplied factory-direct from our showrooms in Shenzhen and Ho Chi Minh City.',
                'icon' => '🪑',
                'category' => 'Furniture',
                'image' => 'brands/bedroom_1.png',

                'brands' => [
                    [
                        'name' => 'AALTO 5-TIER SHELF STAND',
                        'logo' => 'brands/bedroom_1.png',
                        'image' => 'brands/bedroom_1.png',
                    ],
                    [
                        'name' => 'DIONNE RACK',
                        'logo' => 'brands/bedroom_2.png',
                        'image' => 'brands/bedroom_2.png',
                    ],
                    [
                        'name' => 'EMERY DRESSER',
                        'logo' => 'brands/bedroom_3.png',
                        'image' => 'brands/bedroom_3.png',
                    ],
                    [
                        'name' => 'EMERY NIGHTSTAND',
                        'logo' => 'brands/bedroom_4.png',
                        'image' => 'brands/bedroom_4.png',
                    ],
                    [
                        'name' => 'CELESTE END TABLE',
                        'logo' => 'brands/fur_1.png',
                        'image' => 'brands/fur_1.png',
                    ],
                ],
            ],

            [
                'code' => 'MI-BAS-02',
                'number' => '02',
                'name' => 'Basket & Storage',
                'type' => 'export',
                'description' => 'Durable baskets and storage solutions designed for residential and commercial use.',
                'long_description' => 'We design and manufacture a full range of baskets and storage solutions — from woven baskets and storage bins to shelving units and organizers — supplied factory-direct from our showrooms in Shenzhen and Ho Chi Minh City.',
                'icon' => '🧺',
                'category' => 'Furniture',
                'image' => 'brands/bas_1.png',

                'brands' => [
                    [
                        'name' => 'Lazio Set of 3 (Small)',
                        'logo' => 'brands/bas_1.png',
                        'image' => 'brands/bas_1.png',
                    ],
                    [
                        'name' => 'Lucca Set of 3 (Small)',
                        'logo' => 'brands/bas_2.png',
                        'image' => 'brands/bas_2.png',
                    ],
                    [
                        'name' => 'Imola Set of 2 (Large)',
                        'logo' => 'brands/bas_3.png',
                        'image' => 'brands/bas_3.png',
                    ],
                    [
                        'name' => 'Ercolano Set of 2 (Medium)',
                        'logo' => 'brands/bas_4.png',
                        'image' => 'brands/bas_4.png',
                    ],
                ],
            ],

            [
                'code' => 'MI-CH-03',
                'number' => '03',
                'name' => 'Kitchen & Dining Furniture',
                'type' => 'export',
                'description' => 'Durable kitchen and dining furniture designed for residential and commercial use.',
                'long_description' => 'We design and manufacture a full range of kitchen and dining furniture — from countertops and cabinets to dining tables and chairs — supplied factory-direct from our showrooms in Shenzhen and Ho Chi Minh City.',
                'icon' => '🍽️',
                'category' => 'Furniture',
                'image' => 'brands/kit_1.png',

                'brands' => [
                    [
                        'name' => 'Candle Holder - D7.9 x H15.2 cm',
                        'logo' => 'brands/kit_1.png',
                        'image' => 'brands/kit_1.png',
                    ],
                    [
                        'name' => 'Candle holder - D12 H18.5 cm',
                        'logo' => 'brands/kit_2.png',
                        'image' => 'brands/kit_2.png',
                    ],
                    [
                        'name' => 'Noguchi Candle Holder S/2',
                        'logo' => 'brands/kit_3.png',
                        'image' => 'brands/kit_3.png',
                    ],
                    [
                        'name' => 'Bertoia Candle Light',
                        'logo' => 'brands/kit_4.png',
                        'image' => 'brands/kit_4.png',
                    ],
                ],
            ],

            [
                'code' => 'MI-DEC-04',
                'number' => '04',
                'name' => 'Decorative Accessories',
                'type' => 'export',
                'description' => 'Durable decorative accessories designed for residential and commercial use.',
                'long_description' => 'We design and manufacture a full range of decorative accessories — from vases and sculptures to lighting and textiles — supplied factory-direct from our showrooms in Shenzhen and Ho Chi Minh City.',
                'icon' => '🖼️',
                'category' => 'Furniture',
                'image' => 'brands/dec_1.png',

                'brands' => [
                    [
                        'name' => 'Famille Table Top',
                        'logo' => 'brands/dec_1.png',
                        'image' => 'brands/dec_1.png',
                    ],
                    [
                        'name' => 'Emme Letter Blocks Decorative',
                        'logo' => 'brands/dec_2.png',
                        'image' => 'brands/dec_2.png',
                    ],
                    [
                        'name' => 'Rr Letter Blocks Decorative',
                        'logo' => 'brands/dec_3.png',
                        'image' => 'brands/dec_3.png',
                    ],
                    [
                        'name' => 'Flaminia Wall Art Decor',
                        'logo' => 'brands/dec_4.png',
                        'image' => 'brands/dec_4.png',
                    ],
                    [
                        'name' => 'Marmorata rectangular storage box',
                        'logo' => 'brands/dec_5.png',
                        'image' => 'brands/dec_5.png',
                    ],
                    [
                        'name' => '"Sicily S/2S - Decorative Basket in Banana Weave"',
                        'logo' => 'brands/dec_6.png',
                        'image' => 'brands/dec_6.png',
                    ],
                ],
            ],

            [
                'code' => 'MI-OFF-05',
                'number' => '05',
                'name' => 'Lantern',
                'type' => 'export',
                'description' => 'Durable lanterns designed for residential and commercial use.',
                'long_description' => 'We design and manufacture a full range of lanterns — from table lanterns and hanging lanterns to outdoor lanterns and decorative lighting — supplied factory-direct from our showrooms in Shenzhen and Ho Chi Minh City.',
                'icon' => '🏮',
                'category' => 'Furniture',
                'image' => 'brands/lan_1.png',

                'brands' => [
                    [
                        'name' => 'Bristol Lantern Brown - Small',
                        'logo' => 'brands/lan_1.png',
                        'image' => 'brands/lan_1.png',
                    ],
                    [
                        'name' => 'Bristol Lantern Brown - Large',
                        'logo' => 'brands/lan_2.png',
                        'image' => 'brands/lan_2.png',
                    ],
                    [
                        'name' => 'Cecile Lantern - Large',
                        'logo' => 'brands/lan_3.png',
                        'image' => 'brands/lan_3.png',
                    ],
                    [
                        'name' => 'Bristol Lantern with metal roof',
                        'logo' => 'brands/lan_4.png',
                        'image' => 'brands/lan_4.png',
                    ],
                    [
                        'name' => 'Baring Lantern with Ring Handle and Clear Glass',
                        'logo' => 'brands/lan_5.png',
                        'image' => 'brands/lan_5.png',
                    ],
                    [
                        'name' => 'Adams Small Lantern w/ Metal Strips & Natural Rope Handle',
                        'logo' => 'brands/lan_6.png',
                        'image' => 'brands/lan_6.png',
                    ],
                ],
            ],
        ];
    }

    /**
     * --------------------------------------------------------------------------
     * Get Products By Type
     * --------------------------------------------------------------------------
     */
    public function productsByType(string $type): array
    {
        $type = strtolower($type);

        if (! in_array($type, ['export', 'import'], true)) {
            $type = 'export';
        }

        return array_values(
            array_filter(
                $this->products(),
                fn ($product) =>
                    strtolower($product['type'] ?? '') === $type
            )
        );
    }

    /**
     * --------------------------------------------------------------------------
     * Product Catalog
     * --------------------------------------------------------------------------
     */
    public function catalog(Request $request)
    {
        $catalogType = strtolower(
            $request->query('type', 'export')
        );

        // Only allow Import or Export
        if (! in_array($catalogType, ['export', 'import'], true)) {
            $catalogType = 'export';
        }

        // Get products for the selected division
        $products = $this->productsByType($catalogType);

        // Filter by category if selected
        $activeCategory = $request->query('category');

        if ($activeCategory) {
            $products = array_values(
                array_filter(
                    $products,
                    fn ($product) =>
                        ($product['category'] ?? '') === $activeCategory
                )
            );
        }

        // Get categories ONLY from the current division
        $categories = collect(
            $this->productsByType($catalogType)
        )
            ->pluck('category')
            ->filter()
            ->unique()
            ->values();

        return view('products.catalog', [
            'products' => $products,
            'categories' => $categories,
            'activeCategory' => $activeCategory,
            'catalogType' => $catalogType,
        ]);
    }

    /**
     * --------------------------------------------------------------------------
     * Product Detail
     * --------------------------------------------------------------------------
     */
    public function show(string $code)
    {
        $product = collect($this->products())
            ->firstWhere('code', $code);

        if (! $product) {
            abort(404);
        }

        $catalogType = strtolower(
            $product['type'] ?? 'export'
        );

        return view('products.show', [
            'product' => $product,
            'catalogType' => $catalogType,
        ]);
    }

    public function import()
    {
        return view('import', [
            'products' => $this->productsByType('import'),
            'catalogType' => 'import',
        ]);
    }

    public function export()
    {
        return view('export', [
            'products' => $this->productsByType('export'),
            'catalogType' => 'export',
        ]);
    }
}
