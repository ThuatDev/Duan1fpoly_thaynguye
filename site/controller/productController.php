<?php 
    class ProductController{
        function index(){
            $productRespository = new ProductRepository();
            $categoryRepository = new CategoryRepository();
            $item_per_page = 9;
            $page = 1;
            $conds = [];
            $sorts = [];
            $categoryName = "Tất cả sản phẩm ";
            //toán tử 3 ngôi thông thường
            // $category_id = !empty($_GET["category_id"]) ? $_GET["category_id"] : null;

            // toán tử 3 ngôi rút gọn
            $category_id = $_GET["category_id"] ?? null;
            if($category_id){
                $conds=[
                    "category_id" => [
                    "type" => "=",
                    "val" => $category_id
                    ]
                ];
                $category = $categoryRepository->find($category_id);
                $categoryName = $category->getName();
            }//select * .... where category_id=5

            $price_range = $_GET["price-range"] ?? null;
            if($price_range){
                
                $tmp = explode("-", $price_range);
                $start = $tmp[0];
                $end = $tmp[1];
                $conds=[
                    "sale_price" => [
                    "type" => "BETWEEN",
                    "val" => "$start AND $end"
                    ]
                ];
                if($end == "greater"){
                    $conds=[
                        "sale_price" => [
                        "type" => ">",
                        "val" => $start
                        ]
                    ];
                }
            }//select * .... where sale_price betwwen 100000 AND 200000
            $products = $productRespository->getBy($conds, $sorts, $page, $item_per_page);

              //lấy tất cả sản phẩm danh mục
           $categoryRepository = new CategoryRepository();
           $categories = $categoryRepository->getAll();
            require "view/product/index.php";
        }
        
    }
?>