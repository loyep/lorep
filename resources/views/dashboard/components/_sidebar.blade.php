<!-- Sidebar -->
<aside class="sidebar sidebar-expand-lg sidebar-icons-boxed sidebar-dark">
    <header class="sidebar-header" style="background-color: rgb(72, 176, 247);">
        <a class="logo-icon" href="{{ route('dashboard') }}">
            <img src="/dashboard-assets/img/logo-icon-light.png" alt="logo icon"></a>
        <span class="logo">
            <a href="{{ route('dashboard') }}">{{ config('app.name') }}</a>
        </span>
        <span class="sidebar-toggle-fold"></span>
    </header>

    <nav class="sidebar-navigation">
        <ul class="menu">
            <br>
            <li class="menu-item">
                <a class="menu-link" href="{{ route('dashboard') }}">
                    <span class="icon fa fa-home"></span>
                    <span class="title">控制台</span>
                </a>
            </li>
            <br>
            <li class="menu-item">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-align-left"></span>
                    <span class="title">文章</span>
                    <span class="arrow"></span>
                </a>
                <ul class="menu-submenu">
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('admin.posts.index') }}">
                            <span class="dot"></span>
                            <span class="title">所有文章</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="dot"></span>
                            <span class="title">写文章</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('admin.categories.index') }}">
                            <span class="dot"></span>
                            <span class="title">分类</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('admin.tags.index') }}">
                            <span class="dot"></span>
                            <span class="title">标签</span>
                        </a>
                    </li>
                </ul>
            </li>

            {{--<li class="menu-item">--}}

            {{--<a class="menu-link" href="#">--}}
            {{--<span class="icon fa fa-files-o"></span>--}}
            {{--<span class="title">页面</span>--}}
            {{--<span class="arrow"></span>--}}
            {{--</a>--}}

            {{--<ul class="menu-submenu">--}}
            {{--<li class="menu-item">--}}
            {{--<a class="menu-link" href="{{ route('admin.pages.index') }}">--}}
            {{--<span class="dot"></span>--}}
            {{--<span class="title">所有页面</span>--}}
            {{--</a>--}}
            {{--</li>--}}

            {{--<li class="menu-item">--}}
            {{--<a class="menu-link" href="#">--}}
            {{--<span class="dot"></span>--}}
            {{--<span class="title">新建页面</span>--}}
            {{--</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--</li>--}}

            <li class="menu-item">
                <a class="menu-link" href="{{ route('admin.comments.index') }}">
                    <span class="icon fa fa-comment"></span>
                    <span class="title">评论</span>
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-photo"></span>
                    <span class="title">媒体</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">
                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="dot"></span>
                            <span class="title">媒体库</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="dot"></span>
                            <span class="title">添加媒体</span>
                        </a>
                    </li>
                </ul>
            </li>

            <br>

            <li class="menu-item">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-wrench"></span>
                    <span class="title">工具</span>
                </a>
            </li>

            <li class="menu-item">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-pencil"></span>
                    <span class="title">外观</span>
                </a>
            </li>

            <li class="menu-item">

                <a class="menu-link" href="#">
                    <span class="icon fa fa-user"></span>
                    <span class="title">用户</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('admin.users.index') }}">
                            <span class="dot"></span>
                            <span class="title">所有用户</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="dot"></span>
                            <span class="title">添加用户</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('admin.users.profile') }}">
                            <span class="dot"></span>
                            <span class="title">个人资料</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="menu-item">

                <a class="menu-link" href="#">
                    <span class="icon fa fa-cog"></span>
                    <span class="title">设置</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">
                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('admin.options.general') }}">
                            <span class="dot"></span>
                            <span class="title">常规</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('admin.options.writing') }}">
                            <span class="dot"></span>
                            <span class="title">撰写</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('admin.options.reading') }}">
                            <span class="dot"></span>
                            <span class="title">阅读</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('admin.options.discussion') }}">
                            <span class="dot"></span>
                            <span class="title">讨论</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('admin.options.media') }}">
                            <span class="dot"></span>
                            <span class="title">媒体</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="dot"></span>
                            <span class="title">固定链接</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="{{ route('admin.options.advance') }}">
                            <span class="dot"></span>
                            <span class="title">高级</span>
                        </a>
                    </li>

                </ul>
            </li>


        </ul>
    </nav>

</aside>
<!-- END Sidebar -->