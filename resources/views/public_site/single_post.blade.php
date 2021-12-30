@extends('layouts.public.master')
@section('title', 'Post')
@section('content')
@include('alerts.success')
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
        <noscript>
            <div class="alert alert-danger">
                <p>
                    Your browser does not seem to support JavaScript. As a result, your viewing experience will be
                    diminished, and you have been placed in <strong>read-only mode</strong>.
                </p>
                <p>
                    Please download a browser that supports JavaScript, or enable it if it's disabled (i.e. NoScript).
                </p>
            </div>
        </noscript>

        <div data-widget-area="header">

        </div>
        <div class="row">
            <div class="topic col-lg-12">
                <div class="topic-header">
                    <h1 component="post/header" class="" itemprop="name">
                        <span class="topic-title" component="topic/title">
                            <span component="topic/labels">
                                <i component="topic/scheduled" class="pull-left fa fa-clock-o hidden" title="Scheduled"></i>
                                <i component="topic/pinned" class="pull-left fa fa-thumb-tack hidden" title="Pinned"></i>
                                <i component="topic/locked" class="pull-left fa fa-lock hidden" title="Locked"></i>
                                <i class="pull-left fa fa-arrow-circle-right hidden" title="Moved"></i>

                            </span>
                            {{ $posts[0]->post_title }}
                        </span>

                    </h1>

                    <div class="topic-info clearfix">
                        {{-- <div class="category-item inline-block">
                            <div role="presentation" class="icon pull-left"
                                style="background-color: #00abef; color: #ffffff;">
                                <i class="fa fa-fw fa-windows"></i>
                            </div>
                            <a href="https://forums.opera.com/category/11/opera-for-windows">Opera for Windows</a>
                        </div> --}}

                        <div class="tags tag-list inline-block hidden-xs">

                        </div>
                        {{-- <div class="inline-block hidden-xs">
                            <div class="stats text-muted">
                                <i class="fa fa-fw fa-user" title="Posters"></i>
                                <span title="3" class="human-readable-number">3</span>
                            </div>
                            <div class="stats text-muted">
                                <i class="fa fa-fw fa-pencil" title="Posts"></i>
                                <span component="topic/post-count" title="6" class="human-readable-number">6</span>
                            </div>
                            <div class="stats views text-muted">
                                <i class="fa fa-fw fa-eye" title="Views"></i>
                                <span class="human-readable-number" title="98">98</span>
                            </div>
                        </div> --}}

                        {{-- <a class="hidden-xs" target="_blank" href="https://forums.opera.com/topic/53324.rss"><i
                                class="fa fa-rss-square"></i></a>

                        <div component="topic/browsing-users" class="inline-block hidden-xs">

                        </div> --}}

                        <div class="topic-main-buttons pull-right inline-block">
                            <span class="loading-indicator btn pull-left hidden" done="0">
                                <span class="hidden-xs">Loading More Posts</span> <i class="fa fa-refresh fa-spin"></i>
                            </span>





                            <div title="Sort by" class="btn-group bottom-sheet hidden-xs" component="thread/sort">
                                <button class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown" type="button">
                                    <span><i class="fa fa-fw fa-sort"></i></span></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#" class="oldest_to_newest" data-sort="oldest_to_newest"><i
                                                class="fa fa-fw"></i> Oldest to Newest</a></li>
                                    <li><a href="#" class="newest_to_oldest" data-sort="newest_to_oldest"><i
                                                class="fa fa-fw"></i> Newest to Oldest</a></li>
                                    <li><a href="#" class="most_votes" data-sort="most_votes"><i
                                                class="fa fa-fw"></i> Most Votes</a></li>
                                </ul>
                            </div>


                            <div class="inline-block">

                            </div>
                            <div component="topic/reply/container" class="btn-group action-bar bottom-sheet hidden">
                                <a href="https://forums.opera.com/compose?tid=53324&amp;title=Do%20i%20wanna%20auto-refresh%20Opera%20or%20disable%20refresh%20in%20my%20case?"
                                    class="btn btn-sm btn-primary" component="topic/reply" data-ajaxify="false"
                                    role="button"><i class="fa fa-reply visible-xs-inline"></i><span
                                        class="visible-sm-inline visible-md-inline visible-lg-inline"> Reply</span></a>
                                <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu pull-right" role="menu">
                                    <li><a href="#" component="topic/reply-as-topic">Reply as topic</a></li>
                                </ul>
                            </div>




                            {{-- @if (!session()->has('email'))
                            <a component="topic/reply/guest"
                                href="{{route('login')}}"
                                data-base-href="/auth/opera" class="btn btn-sm btn-primary operaLoginButton" rel="nofollow"
                                target="_top">Log in to reply</a>
                                @else
                                <a component="topic/reply/guest"
                                href="{{route('login')}}"
                                data-base-href="/auth/opera" class="btn btn-sm btn-primary operaLoginButton" rel="nofollow"
                                target="_top">Add Comment</a>
                                @endif --}}
                        </div>

                    </div>
                </div>



                <div component="topic/deleted/message" class="alert alert-warning hidden clearfix">
                    <span class="pull-left">This topic has been deleted. Only users with topic management privileges
                        can see it.</span>
                    <span class="pull-right">

                    </span>
                </div>


                <ul component="topic" class="posts timeline" data-tid="53324" data-cid="11">

                    <li component="post" class="  topic-owner-post" data-index="0" data-pid="270618" data-uid="289478"
                        data-timestamp="1640295535651" data-username="lillollo" data-userslug="lillollo" itemscope
                        itemtype="http://schema.org/Comment">
                        <a component="post/anchor" data-index="0" id="0"></a>

                        <meta itemprop="datePublished" content="2021-12-23T21:38:55.651Z">
                        <meta itemprop="dateModified" content="2021-12-23T21:53:14.876Z">

                        <div class="clearfix post-header">
                            <div class="icon pull-left">
                                <a href="https://forums.opera.com/user/lillollo">
                                    <img class="avatar  avatar-sm2x avatar-rounded" alt="lillollo" title="lillollo"
                                        data-uid="289478" loading="lazy" component="user/picture"
                                        src="https://www.gravatar.com/avatar/09a59a079937460df2ccbe2a5e693638?size=192&amp;d=mm"
                                        style="" />
                                    <i component="user/status" class="fa fa-circle status offline" title="Offline"></i>
                                </a>
                            </div>
                        </div>

                        <div class="content" component="post/content" itemprop="text">
                                <strong>
                                    <a href="https://forums.opera.com/user/lillollo" itemprop="author"
                                        data-username="lillollo" data-uid="289478">{{ $posts[0]->name }}</a>
                                </strong><br>
                            <small style="color:rgb(173, 173, 173)">{{ $posts[0]->created_at}}</small>
                            <p dir="auto"> {!! $posts[0]->post_body!!}</p>
                            <?php $tag = explode(',',$posts[0]->post_tag) ?>
                            @foreach ($tag as $item)
                            <span style="background-color:#0597d9;color:white;display:inline-block;width:fit-content;height:25px">
                                <p style="padding:0px 5px">#{!! $item !!}</p>
                            </span>
                            @endforeach
                            @if (Auth::user() !== null)
                            <form action="{{route('add_comment')}}" method="post" role="form" component="profile/edit/form">
                              @csrf
                              <div class="form-group">
                                <br>
                                  <label for="birthday">Write a Comment</label>
                                  <textarea class="ckeditor form-control" name="comment"></textarea>
                                  <input type="hidden" name="post_id" value="{{$posts[0]->post_id}}" id="">
                              </div>
                              <input type="submit" name="submit" value="Add Comment">
                          </form>
                            @endif
                        </div>
                        {{-- <div class="clearfix post-footer">
                            <small class="pull-right post-footer-menu">
                                    <a component="post/reply" href="#" class="no-select hidden">Reply</a>
                                    <a component="post/quote" href="#" class="no-select hidden">Quote</a>
                                </span>
                                <span class="votes">
                                    <a component="post/upvote" href="#" class="">
                                        <i class="fa fa-thumbs-up"></i>
                                    </a>
                                    <span component="post/vote-count" data-votes="0">0</span>
                                    <a component="post/downvote" href="#" class="">
                                        <i class="fa fa-thumbs-down"></i>
                                    </a>
                                </span>
                                <span component="post/tools" class="dropdown moderator-tools bottom-sheet ">
                                    <a href="#" data-toggle="dropdown" data-ajaxify="false"><i
                                            class="fa fa-fw fa-ellipsis-h"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-right" role="menu"></ul>
                                </span>
                            </small>
                            <a component="post/reply-count" data-target-component="post/replies/container" href="#"
                                class="threaded-replies no-select ">
                                <span component="post/reply-count/avatars" class="avatars hidden ">

                                    <img class="avatar  avatar-xs avatar-rounded" alt="sgunhouse" title="sgunhouse"
                                        data-uid="64" loading="lazy" component="avatar/picture"
                                        src="https://www.gravatar.com/avatar/7c0dd6c8da31930827c691da7ce4f41d?size=192&amp;d=mm"
                                        style="" />

                                </span>

                                <strong class="replies-count" component="post/reply-count/text" data-replies="1">1
                                    Reply</strong>
                                <span class="replies-last hidden-xs">Last reply <span class="timeago"
                                        title="2021-12-23T23:13:17.050Z"></span></span>

                                <i class="fa fa-fw fa-chevron-right" component="post/replies/open"></i>
                                <i class="fa fa-fw fa-chevron-down hidden" component="post/replies/close"></i>
                                <i class="fa fa-fw fa-spin fa-spinner hidden" component="post/replies/loading"></i>
                            </a>

                            <div component="post/replies/container"></div>
                        </div> --}}

                    </li>
                    <h2>Comments</h2>
                    @foreach ($comments as $comment)
                        <li component="post" class="  topic-owner-post" data-index="0" data-pid="270618" data-uid="289478"
                            data-timestamp="1640295535651" data-username="lillollo" data-userslug="lillollo" itemscope
                            itemtype="http://schema.org/Comment">
                            <a component="post/anchor" data-index="0" id="0"></a>

                            <meta itemprop="datePublished" content="2021-12-23T21:38:55.651Z">
                            <meta itemprop="dateModified" content="2021-12-23T21:53:14.876Z">

                            <div class="clearfix post-header">
                                <div class="icon pull-left">
                                    <a href="https://forums.opera.com/user/lillollo">
                                        <img class="avatar  avatar-sm2x avatar-rounded" alt="lillollo" title="lillollo"
                                            data-uid="289478" loading="lazy" component="user/picture"
                                                src=" {{asset("black/img/".$comment->image)}}" style="" />
                                        <i component="user/status" class="fa fa-circle status offline" title="Offline"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="content" component="post/content" itemprop="text">
                                <small class="post-author">
                                    <strong>
                                        <a href="https://forums.opera.com/user/lillollo" itemprop="author"
                                            data-username="lillollo" data-uid="289478">{!! $comment->name !!}</a>
                                            <small style="color:rgb(197, 197, 197);display:block">{!! $comment->created_at !!}</small>
                                    </strong>
                                <p dir="auto"> {!! $comment->comment !!}</p>
                                  </small>

                            </div>

                          </li>
                          @endforeach
                  </ul>


{{--
                                <small class="pull-right post-footer-menu">
                                    <span class="post-tools">
                                        <a component="post/reply" href="#" class="no-select hidden">Reply</a>
                                        <a component="post/quote" href="#" class="no-select hidden">Quote</a>
                                    </span>


                                    <span class="votes">
                                        <a component="post/upvote" href="#" class="">
                                            <i class="fa fa-thumbs-up"></i>
                                        </a>

                                        <span component="post/vote-count" data-votes="0">0</span>


                                        <a component="post/downvote" href="#" class="">
                                            <i class="fa fa-thumbs-down"></i>
                                        </a>

                                    </span>


                                    <span component="post/tools" class="dropdown moderator-tools bottom-sheet ">
                                        <a href="#" data-toggle="dropdown" data-ajaxify="false"><i
                                                class="fa fa-fw fa-ellipsis-h"></i></a>
                                        <ul class="dropdown-menu dropdown-menu-right" role="menu"></ul>
                                    </span>

                                </small> --}}

{{--
                                <a component="post/reply-count" data-target-component="post/replies/container" href="#"
                                    class="threaded-replies no-select ">
                                    <span component="post/reply-count/avatars" class="avatars hidden ">

                                        <img class="avatar  avatar-xs avatar-rounded" alt="sgunhouse" title="sgunhouse"
                                            data-uid="64" loading="lazy" component="avatar/picture"
                                            src="https://www.gravatar.com/avatar/7c0dd6c8da31930827c691da7ce4f41d?size=192&amp;d=mm"
                                            style="" />

                                    </span>

                                    <strong class="replies-count" component="post/reply-count/text" data-replies="1">1
                                        Reply</strong>
                                    <span class="replies-last hidden-xs">Last reply <span class="timeago"
                                            title="2021-12-23T23:13:17.050Z"></span></span>

                                    <i class="fa fa-fw fa-chevron-right" component="post/replies/open"></i>
                                    <i class="fa fa-fw fa-chevron-down hidden" component="post/replies/close"></i>
                                    <i class="fa fa-fw fa-spin fa-spinner hidden" component="post/replies/loading"></i>
                                </a> --}}

                <div class="pagination-block text-center">
                    <div class="progress-bar"></div>
                    <div class="wrapper dropup">
                        <i class="fa fa-2x fa-angle-double-up pointer fa-fw pagetop"></i>

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="pagination-text"></span>
                        </a>

                        <i class="fa fa-2x fa-angle-double-down pointer fa-fw pagebottom"></i>
                        <ul class="dropdown-menu dropdown-menu-right" role="menu">
                            <li>
                                <div class="row">
                                    <div class="col-xs-8 post-content"></div>
                                    <div class="col-xs-4 text-right">
                                        <div class="scroller-content">
                                            <span class="pointer pagetop">First post <i
                                                    class="fa fa-angle-double-up"></i></span>
                                            <div class="scroller-container">
                                                <div class="scroller-thumb">
                                                    <span class="thumb-text"></span>
                                                    <div class="scroller-thumb-icon"></div>
                                                </div>
                                            </div>
                                            <span class="pointer pagebottom">Last post <i
                                                    class="fa fa-angle-double-down"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" class="form-control" id="indexInput" placeholder="Enter index">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div data-widget-area="sidebar" class="col-lg-3 col-sm-12 hidden">

            </div>
        </div>

        <div data-widget-area="footer">

        </div>


        <noscript>
            <div component="pagination" class="text-center pagination-container hidden">
                <ul class="pagination hidden-xs">
                    <li class="previous pull-left disabled">
                        <a href="do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-cased41d.html?" data-page="1"><i
                                class="fa fa-chevron-left"></i> </a>
                    </li>



                    <li class="next pull-right disabled">
                        <a href="do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-cased41d.html?" data-page="1"> <i
                                class="fa fa-chevron-right"></i></a>
                    </li>
                </ul>

                <ul class="pagination hidden-sm hidden-md hidden-lg">
                    <li class="first disabled">
                        <a href="do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-cased41d.html?" data-page="1"><i
                                class="fa fa-fast-backward"></i> </a>
                    </li>

                    <li class="previous disabled">
                        <a href="do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-cased41d.html?" data-page="1"><i
                                class="fa fa-chevron-left"></i> </a>
                    </li>

                    <li component="pagination/select-page" class="page select-page">
                        <a href="#">1 / 1</a>
                    </li>

                    <li class="next disabled">
                        <a href="do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-cased41d.html?" data-page="1"> <i
                                class="fa fa-chevron-right"></i></a>
                    </li>

                    <li class="last disabled">
                        <a href="do-i-wanna-auto-refresh-opera-or-disable-refresh-in-my-cased41d.html?" data-page="1"><i
                                class="fa fa-fast-forward"></i> </a>
                    </li>
                </ul>
            </div>
        </noscript>
    </div><!-- /.container#content -->
    </main>

    <div component="toaster/tray" class="alert-window">
        <div id="reconnect-alert" class="alert alert-dismissable alert-warning clearfix hide" component="toaster/toast">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <p>Looks like your connection to Opera forums was lost, please wait while we try to reconnect.</p>
        </div>
    </div>
    <script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>

@endsection
