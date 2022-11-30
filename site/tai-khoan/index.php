
            <?php
                if(isset($_GET['page'])){
                    $user = $_GET['page'];
                    switch ($user) {
                        case 'dang-ky':
                            include_once 'dang-ky.php';
                            break;
                        case 'dang-nhap':
                            include_once 'dang-nhap.php';
                            break;
                        case 'cap-nhat':
                            include_once 'cap-nhat-tk.php';
                            break;
                        case 'doi-mk':
                            include_once 'doi-mk.php';
                            break;
                        case 'quen-mk':
                            include_once 'quen-mk.php';
                            break;
                        case 'dang-xuat':
                            session_destroy();
                            header('location: ?action');
                            break;    
                        default:
                            # code...
                            break;
                    }
                }
            ?>
