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
            | EXPORT PRODUCTS
            |--------------------------------------------------------------------------
            */

            [
                'code' => 'MM-SF-01',
                'number' => '01',
                'name' => 'School Furniture',
                'type' => 'export',
                'description' => 'Durable classroom furniture designed for schools, government programs, and educational institutions.',
                'long_description' => 'Our school furniture line includes chairs, desks, cabinets, and storage solutions built to withstand daily classroom use. Sourced to meet DepEd and government procurement specifications, with options for ergonomic design and bulk institutional orders.',
                'icon' => '▣',
                'category' => 'Furniture',
                'image' => 'products/school-furniture.jpg',

                'brands' => [
                    [
                        'name' => 'Steelcraft',
                        'logo' => 'brands/steelcraft.png',
                        'image' => 'brands/steelcraft.png',
                    ],
                    [
                        'name' => 'EduDesk',
                        'logo' => 'brands/edudesk.png',
                        'image' => 'brands/edudesk.png',
                    ],
                    [
                        'name' => 'Formline',
                        'logo' => 'brands/formline.jpg',
                        'image' => 'brands/formline.png',
                    ],
                ],
            ],

            [
                'code' => 'MM-IT-02',
                'number' => '02',
                'name' => 'IT Equipment',
                'type' => 'export',
                'description' => 'Laptops, tablets, computers, and technology equipment for education and government requirements.',
                'long_description' => 'We supply laptops, desktops, tablets, projectors, and networking equipment configured for classroom and office deployment, including bulk imaging, warranty support, and compliance documentation for government bids.',
                'icon' => '⌘',
                'category' => 'Technology',
                'image' => 'products/it-equipment.jpg',

                'brands' => [
                    [
                        'name' => 'Lenovo',
                        'logo' => 'brands/lenovo.jpg',
                        'image' => 'brands/lenovo.jpg',
                    ],
                    [
                        'name' => 'HP',
                        'logo' => 'brands/hp.jpg',
                        'image' => 'brands/hp.jpg',
                    ],
                    [
                        'name' => 'Acer',
                        'logo' => 'brands/acer.jpg',
                        'image' => 'brands/acer.jpg',
                    ],
                    [
                        'name' => 'Epson',
                        'logo' => 'brands/epson.jpg',
                        'image' => 'brands/epson.jpg',
                    ],
                ],
            ],

            [
                'code' => 'MM-MS-03',
                'number' => '03',
                'name' => 'Math & Science Kits',
                'type' => 'export',
                'description' => 'Educational laboratory equipment, science kits, and learning materials for modern classrooms.',
                'long_description' => 'Hands-on science and math learning kits including lab apparatus, measurement tools, and experiment sets designed to align with curriculum standards for elementary and secondary education.',
                'icon' => '◇',
                'category' => 'Learning Materials',
                'image' => 'products/science-kits.jpg',

                'brands' => [
                    [
                        'name' => 'LabWorks',
                        'logo' => 'brands/labworks.png',
                        'image' => 'products/science-kits-labworks.jpg',
                    ],
                    [
                        'name' => 'ScienceCo',
                        'logo' => 'brands/scienceco.png',
                        'image' => 'products/science-kits-scienceco.jpg',
                    ],
                ],
            ],

            [
                'code' => 'MM-TB-04',
                'number' => '04',
                'name' => 'Textbooks',
                'type' => 'export',
                'description' => 'Educational books and learning resources supporting curriculum and institutional requirements.',
                'long_description' => 'Curriculum-aligned textbooks and supplementary learning resources sourced from approved publishers, supporting institutional and government education programs at scale.',
                'icon' => '▤',
                'category' => 'Learning Materials',
                'image' => 'products/textbooks.jpg',

                'brands' => [
                    [
                        'name' => 'Rex Book Store',
                        'logo' => 'brands/rex.png',
                        'image' => 'products/textbooks-rex.jpg',
                    ],
                    [
                        'name' => 'Vibal',
                        'logo' => 'brands/vibal.png',
                        'image' => 'products/textbooks-vibal.jpg',
                    ],
                ],
            ],

            [
                'code' => 'MM-MT-05',
                'number' => '05',
                'name' => 'Manipulative Toys',
                'type' => 'export',
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

            /*
            |--------------------------------------------------------------------------
            | IMPORT PRODUCTS
            |--------------------------------------------------------------------------
            */

            [
                'code' => 'MI-FUR-01',
                'number' => '01',
                'name' => 'Furniture',
                'type' => 'import',
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
                'type' => 'import',
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
                'type' => 'import',
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
                'type' => 'import',
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
                'type' => 'import',
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
