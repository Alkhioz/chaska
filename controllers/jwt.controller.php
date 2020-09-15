<?php 

use \Firebase\JWT\JWT;

class jwtController{
    
    

    public function __CONSTRUCT(){
    }
    
    public function Index(){
        header('Content-Type: application/json');
        echo json_encode((array)JWT::decode('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpYXQiOjE2MDAxNDM0MjYsImV4cCI6MTYwMDE0NzAyNiwiZGF0YSI6WyJbe1wiaWRcIjpcIjFcIixcImVtYWlsXCI6XCJhZG1pbkBlbWFpbC5jb21cIixcImNlZHVsYVwiOm51bGwsXCJub21icmVzXCI6bnVsbCxcImFwZWxsaWRvc1wiOm51bGwsXCJmZWNoYV9uYWNpbWllbnRvXCI6bnVsbCxcInNleG9cIjpudWxsLFwicm9sZXNcIjpcIltcXFwiUk9MRV9VU0VSXFxcIl1cIixcInBhc3N3b3JkXCI6XCIkYXJnb24yaWQkdj0xOSRtPTY1NTM2LHQ9NCxwPTEkWlVoSE1rdHpWQzR3ZWsxcGNqSk5lQSRBckk0YjA5a1NUT1xcXC8wemdcXFwvOEs2RXJaeHd6WkNoeEJLWGdNUHZ5MFVxZGpJXCIsXCJlc3RhZG9cIjpcIjFcIixcImNvbWVudGFyaW9cIjpudWxsfV0iXX0.il8wVaJYL6uLGr8ujgWbmCE1O4xA7ukMXuI23vRT_Kw', 'd32a9b3dfa696a8bfd37a9ae864e536d', array('HS256')));
    }

}