<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        @forelse($items as $key=> $item)
            <li class="nav-heading">
                {{$item['heading']}}
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#{{str_replace(' ', '', $item['navItem'])}}" data-bs-toggle="collapse" href="{{ isset($item['link']) ? route($item['link']): "" }}">
                    <i class="{{$item['icon']}}"></i>
                    <span>
                             {{$item['navItem']}}
                        </span>
                    @if(isset($item['child']))
                    <i class="bi bi-chevron-down ms-auto"></i>
                    @endif
                </a>
                    @if(isset($item['child']))
                <ul id="{{str_replace(' ', '', $item['navItem'])}}" class="nav-content collapse" data-bs-parent="#sidebar-nav">
                    @forelse($item['child'] as $child)
                        <li>
                            <a href="{{route($child['link'])}}">
                                <i class="{{$child['icon']}}"></i><span>{{$child['title']}}</span>
                            </a>
                        </li>
                    @empty
                        <li>
                            <a href="">
                                <span>Nothing to show</span>
                            </a>
                        </li>
                    @endforelse
                </ul>
                    @endif
            </li>
        @empty
            <li class="nav-item">
                <a class="nav-link">
                    <span>Nothing to show</span>
                </a>
            </li>
        @endforelse

    </ul>

</aside>
