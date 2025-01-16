<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>agri-site</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <!--CSSはpublicフォルダに入っている-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    
    <body>
        
        <div class="test1">
            <div class="container">
                <div class="row">
                    <header class="mb-4">
                        
                        <nav class="navbar navbar-expand-lg">
                            <div class="container-fluid">
                                <a class="navbar-brand" href="#"><img src="https://res.cloudinary.com/dmmkqk7xc/image/upload/v1733639379/KCG-FARM_iu2b0f.png" width="70%"/></a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="nav-link font fuchidori" href="/">TOP</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link font fuchidori" href="/weare">私たちについて</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link font fuchidori" href="/onlineshop">ONLINE SHOP</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link font fuchidori" href="/contact">お問い合わせ</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        
                    </header>
                    
                    <div class="col-12">
                        <p class="font-a fuchidori" style="display: none">自然の力を活用して、</p>
                        
                        <p class="font-a fuchidori" style="display: none">新鮮な野菜をお届けします。</p>
                    </div>
                </div>
            </div>
        </div>
        
    
        <script>
            $(document).ready(function () {
               // 2秒かけてフェードイン
                $(".font-a").fadeIn(8000);
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>