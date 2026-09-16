<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected function products(): array
    {
        return [
            [
                'code' => 'MM-SF-01',
                'number' => '01',
                'name' => 'School Furniture',
                'description' => 'Durable classroom furniture designed for schools, government programs, and educational institutions.',
                'long_description' => 'Our school furniture line includes chairs, desks, cabinets, and storage solutions built to withstand daily classroom use. Sourced to meet DepEd and government procurement specifications, with options for ergonomic design and bulk institutional orders.',
                'icon' => '▣',
                'category' => 'Furniture',
                'image' => 'products/school-furniture.jpg',
                'brands' => [
                    ['name' => 'Steelcraft', 'logo' => 'brands/steelcraft.png'],
                    ['name' => 'EduDesk', 'logo' => 'brands/edudesk.png'],
                    ['name' => 'Formline', 'logo' => 'brands/formline.jpg'],
                ],
            ],
            [
                'code' => 'MM-IT-02',
                'number' => '02',
                'name' => 'IT Equipment',
                'description' => 'Laptops, tablets, computers, and technology equipment for education and government requirements.',
                'long_description' => 'We supply laptops, desktops, tablets, projectors, and networking equipment configured for classroom and office deployment, including bulk imaging, warranty support, and compliance documentation for government bids.',
                'icon' => '⌘',
                'category' => 'Technology',
                'image' => 'products/it-equipment.jpg',
                'brands' => [
                    ['name' => 'Lenovo', 'logo' => 'brands/lenovo.jpg'],
                    ['name' => 'HP', 'logo' => 'brands/hp.jpg'],
                    ['name' => 'Acer', 'logo' => 'brands/acer.jpg'],
                    ['name' => 'Epson', 'logo' => 'brands/epson.jpg'],
                ],
            ],
            [
                'code' => 'MM-MS-03',
                'number' => '03',
                'name' => 'Math & Science Kits',
                'description' => 'Educational laboratory equipment, science kits, and learning materials for modern classrooms.',
                'long_description' => 'Hands-on science and math learning kits including lab apparatus, measurement tools, and experiment sets designed to align with curriculum standards for elementary and secondary education.',
                'icon' => '◇',
                'category' => 'Learning Materials',
                'image' => 'products/science-kits.jpg',
                'brands' => [
                    ['name' => 'LabWorks', 'logo' => 'brands/labworks.png'],
                    ['name' => 'ScienceCo', 'logo' => 'brands/scienceco.png'],
                ],
            ],
            [
                'code' => 'MM-TB-04',
                'number' => '04',
                'name' => 'Textbooks',
                'description' => 'Educational books and learning resources supporting curriculum and institutional requirements.',
                'long_description' => 'Curriculum-aligned textbooks and supplementary learning resources sourced from approved publishers, supporting institutional and government education programs at scale.',
                'icon' => '▤',
                'category' => 'Learning Materials',
                'image' => 'products/textbooks.jpg',
                'brands' => [
                    ['name' => 'Rex Book Store', 'logo' => 'brands/rex.png'],
                    ['name' => 'Vibal', 'logo' => 'brands/vibal.png'],
                ],
            ],
            [
                'code' => 'MM-MT-05',
                'number' => '05',
                'name' => 'Manipulative Toys',
                'description' => 'Hands-on educational materials designed to support early learning and classroom development.',
                'long_description' => 'Early-learning manipulatives and developmental toys designed to support motor skills, cognitive development, and classroom engagement for pre-school and early elementary programs.',
                'icon' => '○',
                'category' => 'Early Learning',
                'image' => 'products/manipulative-toys.jpg',
                'brands' => [
                    ['name' => 'PlayLearn', 'logo' => 'brands/playlearn.png'],
                ],
            ],
            [
                'code' => 'MM-OS-06',
                'number' => '06',
                'name' => 'Other Supplies',
                'description' => 'Additional procurement categories sourced according to agency specifications and project requirements.',
                'long_description' => 'Beyond our core categories, we source additional supplies and equipment based on agency-specific specifications, including custom procurement requests for specialized programs.',
                'icon' => '+',
                'category' => 'General Supplies',
                'image' => 'products/other-supplies.jpg',
                'brands' => [],
            ],
        ];
    }

    public function catalog(Request $request)
    {
        $products = $this->products();

        if ($request->filled('category')) {
            $products = array_values(array_filter(
                $products,
                fn ($product) => $product['category'] === $request->get('category')
            ));
        }

        $categories = collect($this->products())->pluck('category')->unique()->values();

        return view('products.catalog', [
            'products' => $products,
            'categories' => $categories,
            'activeCategory' => $request->get('category'),
        ]);
    }

    public function show(string $code)
    {
        $product = collect($this->products())->firstWhere('code', $code);

        if (! $product) {
            abort(404);
        }

        return view('products.show', [
            'product' => $product,
        ]);
    }
}