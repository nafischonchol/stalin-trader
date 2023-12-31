@php
    if(isset($seoContents) && count($seoContents)){
        $seoContents        = json_decode(json_encode($seoContents, true));
        $socialImageSize    = explode('x', $seoContents->image_size);
    }elseif($seo){
        $seoContents        = $seo;
        $socialImageSize    = explode('x', getFileSize('seo'));
        $seoContents->image = getImage(getFilePath('seo').'/'. $seo->image);
    }else{
        $seoContents = null;
    }

    $meta_title = "Stalin Finance: Crypto, Forex, CFDs, Stocks & AI Trading Bots | Start Trading for Guaranteed Profit | Since 2021";
@endphp

<title>{{ $meta_title }}</title>
<meta name="title" Content="{{$meta_title}}">

@if($seoContents)
    <meta name="description" content="{{ $seoContents->meta_description??$seoContents->description }}">
    <meta name="keywords" content="{{ implode(',',$seoContents->keywords) }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/logoIcon/favicon.png') }}" type="image/x-icon">

    {{--<!-- Apple Stuff -->--}}
    <link rel="apple-touch-icon" href="{{ asset('assets/images/logoIcon/logo.png') }}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="{{ $meta_title }}">
    {{--<!-- Google / Search Engine Tags -->--}}
    <meta itemprop="name" content="{{ $meta_title }}">
    <meta itemprop="description" content="{{ $seoContents->description }}">
    <meta itemprop="image" content="{{ $seoContents->image }}">
    {{--<!-- Facebook Meta Tags -->--}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $seoContents->social_title }}">
    <meta property="og:description" content="{{ $seoContents->social_description }}">
    <meta property="og:image" content="{{ $seoContents->image }}"/>
    <meta property="og:image:type" content="{{ @pathinfo($seoContents->image)['extension'] }}"/>
    <meta property="og:image:width" content="{{ $socialImageSize[0] }}" />
    <meta property="og:image:height" content="{{ $socialImageSize[1] }}" />
    <meta property="og:url" content="{{ url()->current() }}">
    {{--<!-- Twitter Meta Tags -->--}}
    <meta name="twitter:card" content="summary_large_image">
@endif