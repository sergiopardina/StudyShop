<nav>
    <div id="search_bar">
        <form>
            <input type="text" name=text" class="search" placeholder="{{ __('Search here') }}">
            <input type="submit" name="submit" class="submit" value="{{ __('Search') }}">
        </form>
        <ul>
            <li><a href="/catalog">{{ __('Catalog') }}</a></li>
            <li><a href="/about">{{ __('About us') }}</a></li>
            <li><a href="/contacts">{{ __('Contacts') }}</a></li>
            <li><a href="/account">{{ __('Personal account') }}</a></li>
        </ul>
        <div>
            <a><img src="images/carticon.png" alt="Cart"></a>
        </div>
    </div>
</nav>
