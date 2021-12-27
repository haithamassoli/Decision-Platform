@extends('layouts.public.master')
@section('content')
        <div class="container" id="download-opera">
            <div class="get-opera">
                <div class="get-opera-closer">
                    <svg width="24px" height="24px" viewBox="0 0 30 30" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <circle id="oval" fill="#fff" cx="15" cy="15" r="9"></circle>
                        <path d="M19.5146932,11 L11,19.5146932" id="line-1" stroke="#452eb7" stroke-width="2"></path>
                        <path d="M19.5146932,19.5146932 L11,11" id="line-2" stroke="#452eb7" stroke-width="2"></path>
                    </svg>
                </div>
                <p class="get-opera-title">
                    <strong>Do more on the web, with a fast and secure browser!</strong>
                </p>
                <p class="get-opera-element">Download Opera browser with:</p>
                <ul class="get-opera-features-list">
                    <li class="get-opera-features-list--adblocker">built-in ad blocker</li>
                    <li class="get-opera-features-list--battery-saver">battery saver</li>
                    <li class="get-opera-features-list--free-vpn">free VPN</li>
                </ul>
                <a class="get-opera-btn os-default" href="https://www.opera.com/computer"
                    data-query-params="utm_campaign=forums_banner&amp;utm_medium=ip&amp;utm_source=forums_opera_com">Download
                    Opera</a>
            </div>

        </div>


        <div class="container" id="content">
            {{-- <noscript>
                <div class="alert alert-danger">
                    <p>
                        Your browser does not seem to support JavaScript. As a result, your viewing experience will be
                        diminished, and you have been placed in <strong>read-only mode</strong>.
                    </p>
                    <p>
                        Please download a browser that supports JavaScript, or enable it if it's disabled (i.e.
                        NoScript).
                    </p>
                </div>
            </noscript> --}}
                <div class="col-lg-12" style="margin-left: 100px">

                    <h1 class="section-title">Categories</h1>

                    <ul class="categories" itemscope itemtype="http://www.schema.org/ItemList">

                        @foreach ($categories as $category)

                            <li component="categories/category" data-cid="5" data-numRecentReplies="1"
                                class="clearfix category-5">
                                <meta itemprop="name" content="Opera for computers">

                                <div class="category-details clearfix col-md-9 col-sm-9">
                                    <div class="category-color" style="background-color: #501ac4"></div>

                                    <div class="content">
                                        <div class="col-md-8 show-separator clickable-area">
                                            <a class="clickable-area-link" href="index/{{ $category->category_id }}">
                                            </a>
                                            <h2 class="title">


                                                <a href="index/{{ $category->category_id }}" itemprop="url">

                                                    {{ $category->category_name }}
                                                    <?php
                                                     $counter = DB::table('posts')
                                                     ->where('category_id', $category->category_id)
                                                     ->count(); ?>
                                                </a>
                                            </h2>

                                            <div class="description">
                                                <p>Discussions about Opera browser that runs on your computer</p>

                                            </div>

                                        </div>

                                        {{-- <div class="col-md-2 hidden-sm hidden-xs stats">
                                            <span class="unread human-readable-number" title="31073">31073</span><br />
                                            <small>Topics</small>
                                        </div> --}}

                                        <div class="col-md-4 hidden-sm hidden-xs stats">
                                            <span class="unread human-readable-number"
                                                title="152589">
                                            {{$counter}}
                                            </span><br />
                                            <small>Posts</small>
                                        </div>

                                        <span class="visible-xs col-xs-12">

                                            <a class="permalink"
                                                href="topic/53368/crash-opera-deleted-all-tabs-what-to-do/2a4c9.html">
                                                <small class="timeago" title="2021-12-26T19:11:39.634Z"></small>
                                            </a>

                                        </span>

                                    </div>

                                    {{-- <span class="col-md-12 col-xs-12 box-footer"><a
                                            href="category/11/opera-for-windows.html"><span class="fa-stack fa-lg"><i
                                                    style="color: #f2f2f2;" class="fa fa-circle fa-stack-2x"></i><i
                                                    style="color:#00abef;"
                                                    class="fa fa-stack-1x fa-windows"></i></span><small>Opera for
                                                Windows</small></a> <a href="category/12/opera-for-mac.html"><span
                                                class="fa-stack fa-lg"><i style="color: #f2f2f2;"
                                                    class="fa fa-circle fa-stack-2x"></i><i style="color:#89a1d4;"
                                                    class="fa fa-stack-1x fa-apple"></i></span><small>Opera for
                                                Mac</small></a> <a href="category/13/opera-for-linux.html"><span
                                                class="fa-stack fa-lg"><i style="color: #f2f2f2;"
                                                    class="fa fa-circle fa-stack-2x"></i><i style="color:#dd4a14;"
                                                    class="fa fa-stack-1x fa-linux"></i></span><small>Opera for
                                                Linux</small></a> <a href="category/14/future-releases.html"><span
                                                class="fa-stack fa-lg"><i style="color: #f2f2f2;"
                                                    class="fa fa-circle fa-stack-2x"></i><i style="color:#ff2929;"
                                                    class="fa fa-stack-1x fa-forward"></i></span><small>Future
                                                releases</small></a> <a
                                            href="category/15/suggestions-and-feature-requests.html"><span
                                                class="fa-stack fa-lg"><i style="color: #f2f2f2;"
                                                    class="fa fa-circle fa-stack-2x"></i><i style="color:#009687;"
                                                    class="fa fa-stack-1x fa-thumbs-up"></i></span><small>Suggestions
                                                and
                                                feature requests</small></a> </span> --}}

                                </div>

                            </li>
                        @endforeach
                    </ul>
                    <div component="pagination" class="text-center pagination-container hidden">
                        <ul class="pagination hidden-xs">
                            <li class="previous pull-left disabled">
                                <a href="indexd41d.html?" data-page="1"><i class="fa fa-chevron-left"></i> </a>
                            </li>



                            <li class="next pull-right disabled">
                                <a href="indexd41d.html?" data-page="1"> <i class="fa fa-chevron-right"></i></a>
                            </li>
                        </ul>

                        <ul class="pagination hidden-sm hidden-md hidden-lg">
                            <li class="first disabled">
                                <a href="indexd41d.html?" data-page="1"><i class="fa fa-fast-backward"></i> </a>
                            </li>

                            <li class="previous disabled">
                                <a href="indexd41d.html?" data-page="1"><i class="fa fa-chevron-left"></i> </a>
                            </li>

                            <li component="pagination/select-page" class="page select-page">
                                <a href="#">1 / 1</a>
                            </li>

                            <li class="next disabled">
                                <a href="indexd41d.html?" data-page="1"> <i class="fa fa-chevron-right"></i></a>
                            </li>

                            <li class="last disabled">
                                <a href="indexd41d.html?" data-page="1"><i class="fa fa-fast-forward"></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div data-widget-area="sidebar" class="col-lg-3 col-sm-12 hidden">

                </div>

            <div data-widget-area="footer">

            </div>
        </div><!-- /.container#content -->
    </main>

    <div component="toaster/tray" class="alert-window">
        <div id="reconnect-alert" class="alert alert-dismissable alert-warning clearfix hide"
            component="toaster/toast">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p>Looks like your connection to Opera forums was lost, please wait while we try to reconnect.</p>
        </div>
    </div>
    @endsection
