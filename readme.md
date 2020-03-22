Vì sao nên sử dụng Redis? Các bạn  có thể đọc ở đây

Ở bài này mình chỉ hướng dẫn cài đặt Redis trên MacOS X.

Để cài đặt Redis on Mac ta thực hiện cài đặt với homebrew như sau. Từ Termial ta gõ lệnh:

 brew install redis
Để khởi động Redis khởi động cùng máy tính ta dùng lệnh

ln -sfv /usr/local/opt/redis/*.plist ~/Library/LaunchAgents
Khởi động Redis với Launchctl

launchctl load ~/Library/LaunchAgents/homebrew.mxcl.redis.plist
Nếu bạn không có Launchctl bạn sử dụng lệnh

redis-server /usr/local/etc/redis.conf
Để kiểm tra Redis đã hoạt động hay chưa ta dùng lệnh sau để check

redis-cli ping
Thật đơn giản phải không nào? Chúc các bạn thành công!