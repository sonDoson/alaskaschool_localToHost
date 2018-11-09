<footer style="">
    <div class="section" id="footer-grid" style="">
        <div class="footer-left">
            <div id="footer-left-img" style="">
                <img src="{{ asset('uploads/logo/logo02.png') }}" alt="alaska school" width="auto" height="100%" />
            </div>
            <div id="footer-left-form" style="">
                <form method="GET" action="" style="">
                    <input name="email" type="text" placeholder="Email..." /><br />
                    <input name="name" type="text" placeholder="Họ và tên..." />
                    <input name="number" type="text" placeholder="Số điện thoại..." />
                    <textarea name="content"></textarea>
                    <input type="submit" value="SEND">
                </form>
            </div>
            <div id="footer-left-conect" style="">
                <div><p>Conect with us</p></div>
                <div>
                    @foreach($contact['link'] as $key => $value)
                        @if($value['link'] !== '')
                        <a href="{{ $value['link'] }}" style="color: #ffffff"><i style="font-size: 45px; margin-right: 10px" class="{{ $value['icon'] }}"></i></a>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div>
        </div>
    </div>
</footer>