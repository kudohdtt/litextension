Folder Controller: sẽ chứa các file có chức năng nhận request từ client, điều phối các Model và View để có thể cho ra output thích hợp và trả kết quả về cho người dung.
Folder Lib: sẽ chứa nhưng thư viện hoặc những function.
Folder Model: chứa các file có chức năng giao tiếp, truy vấn tới sơ sở dữ liệu.
Folder Public: chứa hình ảnh, css, font,....
Folder View: chứa các file xử lý giao diện.
File Index.php: là file chính của của chúng ta, file này có tác dụng nhận các request để điều hướng đến các View và Controller tương ứng để xử lý.


1 số đường dẫn chính :
postManager/amount=5&page=1
postManager/route/router.php?controller=addPost
postManager/route/router.php?controller=deletePost&id=