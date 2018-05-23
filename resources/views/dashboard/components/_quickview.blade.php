<!-- Global quickview -->
<div id="qv-global" class="quickview">
    <header class="quickview-header">
        <p class="quickview-title lead">Settings</p>
        <span class="close"><i class="ti-close"></i></span>
    </header>

    <div class="quickview-body">
        <div class="media-list media-list-divided media-list-hover">

            <div class="media">
                <div class="media-body">
                    <p><strong>Sticky Topbar</strong></p>
                    <p>Topbar is allways visible</p>
                </div>
                <label class="switch">
                    <input type="checkbox" checked onchange="topbar.toggleFix()">
                    <span class="switch-indicator"></span>
                </label>
            </div>

            <div class="media">
                <div class="media-body">
                    <p><strong>Folded Sidebar</strong></p>
                    <p>Only display icons in the sidebar</p>
                </div>
                <label class="switch">
                    <input type="checkbox" onchange="sidebar.toggleFold()">
                    <span class="switch-indicator"></span>
                </label>
            </div>

            <div class="media">
                <div class="media-body">
                    <p><strong>Topbar Color</strong></p>
                    <p>Change background color of the topbar</p>

                    <div class="color-selector color-selector-sm mt-12">
                        <label class="inverse">
                            <input type="radio" value="default" name="global-topbar-color" checked>
                            <span style="background-color:#ffffff"></span>
                        </label>

                        <label>
                            <input type="radio" value="33cabb" name="global-topbar-color">
                            <span style="background-color:#33cabb"></span>
                        </label>

                        <label>
                            <input type="radio" value="48b0f7" name="global-topbar-color">
                            <span style="background-color:#48b0f7"></span>
                        </label>

                        <label>
                            <input type="radio" value="faa64b" name="global-topbar-color">
                            <span style="background-color:#faa64b"></span>
                        </label>

                        <label>
                            <input type="radio" value="f96868" name="global-topbar-color">
                            <span style="background-color:#f96868"></span>
                        </label>

                        <label>
                            <input type="radio" value="926dde" name="global-topbar-color">
                            <span style="background-color:#926dde"></span>
                        </label>

                        <label>
                            <input type="radio" value="57c7d4" name="global-topbar-color">
                            <span style="background-color:#57c7d4"></span>
                        </label>

                        <label>
                            <input type="radio" value="3f4a59" name="global-topbar-color">
                            <span style="background-color:#3f4a59"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="media">
                <div class="media-body">
                    <p><strong>Sidebar Color</strong></p>
                    <p>Change background color of the sidebar</p>

                    <div class="color-selector color-selector-sm mt-12">
                        <label class="inverse">
                            <input type="radio" value="light" name="global-sidebar-color">
                            <span style="background-color:#ffffff"></span>
                        </label>

                        <label>
                            <input type="radio" value="default" name="global-sidebar-color">
                            <span style="background-color:#3f4a59"></span>
                        </label>

                        <label>
                            <input type="radio" value="dark" name="global-sidebar-color" checked>
                            <span style="background-color:#242a33"></span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="media">
                <div class="media-body">
                    <p><strong>Sidebar Header Color</strong></p>
                    <p>Change background color of the header.</p>

                    <div class="color-selector color-selector-sm mt-12">
                        <label>
                            <input type="radio" value="#33cabb" name="sidebar-header-bg-color">
                            <span class="bg-primary"></span>
                        </label>

                        <label>
                            <input type="radio" value="#46be8a" name="sidebar-header-bg-color">
                            <span class="bg-success"></span>
                        </label>

                        <label>
                            <input type="radio" value="#48b0f7" name="sidebar-header-bg-color" checked>
                            <span class="bg-info"></span>
                        </label>

                        <label>
                            <input type="radio" value="#f2a654" name="sidebar-header-bg-color">
                            <span class="bg-warning"></span>
                        </label>

                        <label>
                            <input type="radio" value="#f96868" name="sidebar-header-bg-color">
                            <span class="bg-danger"></span>
                        </label>

                        <label>
                            <input type="radio" value="#ff708e" name="sidebar-header-bg-color">
                            <span class="bg-pink"></span>
                        </label>

                        <label>
                            <input type="radio" value="#6d5eac" name="sidebar-header-bg-color">
                            <span class="bg-purple"></span>
                        </label>

                        <label>
                            <input type="radio" value="#f262d3" name="sidebar-header-bg-color">
                            <span class="bg-brown"></span>
                        </label>

                        <label>
                            <input type="radio" value="#3adad0" name="sidebar-header-bg-color">
                            <span class="bg-cyan"></span>
                        </label>

                        <label>
                            <input type="radio" value="#fdd501" name="sidebar-header-bg-color">
                            <span class="bg-yellow"></span>
                        </label>

                        <label>
                            <input type="radio" value="#465161" name="sidebar-header-bg-color">
                            <span class="bg-dark"></span>
                        </label>

                        <label>
                            <input type="radio" value="#999999" name="sidebar-header-bg-color">
                            <span class="bg-gray"></span>
                        </label>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- END Global quickview -->