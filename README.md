# sử dụng ckediter
## giới thiệu:
CKEditor là một trình soạn thảo văn bản HTML.được thiết kế để đơn giản hóa việc tạo ra nội dung trang web. Đó là một trình soạn thảo WYSIWYG mang lại các tính năng xử lý văn bản phổ biến trực tiếp cho website.

## install trong cakephp 
-- download source tại: http://ckeditor.com/download
copy source vào thư mục js trong webroot
## install trong cakephp 
-- khi sử dụng ckediter ta cần khai báo load js của nó trong layout tương ứng
vd bạn sử dụng bài viết trong việc add post của blog. trang add đang sử dụng layout post.ctp.
ta khai báo trong layout post.ctp như sau:
echo $this->Html->script('ckeditor/ckeditor.js');
## sử dụng:
trong view add.ctp ta gọi:  <?php echo $this->Ck->input('field_name');?>

# Responsive web design
## lý do
 * trong thời đại các thiết bị di động lên ngôi. việc hiển thị trang web cũng cần thích ứng tốt với nhiều loại màn hình khác nhau của các thiết bị di động. Việc ra đời của Responsive nhằm hiển thị trang web trên nhiều thiết bị di động khác nhua mà ko bị vỡ cấu trúc website mà ta mong muốn.
 * 
## install trong cakephp 
 * responsive kế thừa và tương tự như responsive architecture, trang web khi được thiết kế phải có khả năng tự động điều chỉnh để thích nghi với nhiều nhóm người sử dụng khác nhau.
 * Cách thiết kế website Responsive:
CSS-Media Queries:
 * sử dụng media queries để nhận biết các độ phân giải màn hình khách nhau nhằm load css cho trang web cho phù hợp với màn hình client.
//980px hoặc nhỏ hơn
@media screen and (max-width: 980px) {
    #pagewrap {
        width: 94%;
    }
    #content {
        width: 65%;
    }
    #sidebar {
        width: 30%;
    }
}


- ta có thể sử dụng đồng thời nhiều thẻ @media screen để tạo ra css phù hợp với website cần hiển thị

- demo: haianhxinh.com
 * chức năng add post sử dụng ckediter
 * tổng thể trang web được thiết kế theo Responsive

