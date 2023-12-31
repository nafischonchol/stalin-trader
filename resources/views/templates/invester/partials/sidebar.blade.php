@php
    $promotionCount = App\Models\PromotionTool::count();
@endphp
<div class="dashboard-sidebar" id="dashboard-sidebar">
    <button class="btn-close dash-sidebar-close d-xl-none"></button>
    <a href="{{ route('home') }}" class="logo"><img src="{{ asset('assets/logo.png') }}" alt="images"></a>
    <ul class="sidebar-menu mt-5">
        <li><a href="{{ route('user.home') }}" class="{{ menuActive('user.home') }}"><span class="material-symbols-outlined">
            home
            </span>
                @lang('Dashboard')</a></li>
        <li><a href="{{ route('plan') }}" class="{{ menuActive(['plan']) }}">
            <span class="material-symbols-outlined">
                robot_2
                </span>
                @lang('AI Trading Bots')</a></li>
                <li><a href="{{ route('user.forex.trade.widget') }}"
                    class="{{ menuActive(['user.forex.trade.widget']) }}"><span class="material-symbols-outlined">
                        candlestick_chart
                        </span>
                    @lang('Options Trade')</a></li>
        <li><a href="{{ route('user.deposit.index') }}" class="{{ menuActive('user.deposit*') }}"><span class="material-symbols-outlined">
            download
            </span>
                @lang('Deposit Funds')</a></li>

        <li><a href="{{ route('user.withdraw') }}" class="{{ menuActive('user.withdraw*') }}"><span class="material-symbols-outlined">
            upload
            </span>
                @lang('Withdraw Funds')</a></li>

        @if ($general->b_transfer)
            <li><a href="{{ route('user.transfer.balance') }}" class="{{ menuActive('user.transfer.balance') }}"><span class="material-symbols-outlined">
                sync_alt
                </span>
                    @lang('Balance Transfer')</a></li>
        @endif
        <li><a href="{{ route('user.transactions') }}" class="{{ menuActive('user.transactions') }}"><span class="material-symbols-outlined">
            problem
            </span>
                @lang('All Transaction')</a></li>

        @if ($general->user_ranking)
            <li><a href="{{ route('user.invest.ranking') }}" class="{{ menuActive('user.invest.ranking') }}"><span class="material-symbols-outlined">
                military_tech
                </span>
                    @lang('Rank Bonus')</a></li>
        @endif
        <li><a href="{{ route('user.referrals') }}" class="{{ menuActive('user.referrals') }}"><span class="material-symbols-outlined">
            group
            </span>
                @lang('My Team')</a></li>

        @if ($general->promotional_tool && $promotionCount)
            <li><a href="{{ route('user.promotional.banner') }}"
                    class="{{ menuActive('user.promotional.banner') }}"><span class="material-symbols-outlined">
                        live_help
                        </span>
                    @lang('Promotional Banner')</a></li>
        @endif

        <li><a href="{{ route('ticket.index') }}"
                class="{{ menuActive(['ticket.index', 'ticket.view', 'ticket.open']) }}"><span class="material-symbols-outlined">
                    support
                    </span>
                @lang('Support Ticket')</a></li>

        <li><a href="{{ route('user.twofactor') }}" class="{{ menuActive('user.twofactor') }}"><span class="material-symbols-outlined">
            token
            </span>
                @lang('2FA Security')</a></li>

        <li><a href="{{ route('user.profile.setting') }}" class="{{ menuActive('user.profile.setting') }}"><span class="material-symbols-outlined">
            person_2
            </span>
                @lang('Profile')</a></li>

        <li><a href="{{ route('user.change.password') }}" class="{{ menuActive('user.change.password') }}"><span class="material-symbols-outlined">
            water_lock
            </span>
                @lang('Change Password')</a></li>

        <li><a href="{{ route('user.logout') }}" class="{{ menuActive('user.logout') }}"><span class="material-symbols-outlined">
            logout
            </span>
                @lang('Logout')</a></li>
    </ul>
</div>
