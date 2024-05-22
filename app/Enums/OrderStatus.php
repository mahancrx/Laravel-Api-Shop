<?php

namespace  App\Enums;
enum OrderStatus:string{
    case Received = 'received';
    case Success = 'success';
    case Rejected = 'rejected';
    case Processing = 'processing';
}
