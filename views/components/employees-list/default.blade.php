<div class="employees-list">

    @foreach($self->getItems() as $item)

        <div class="item flex flex-nowrap">

            <div class="img">
                @if ($item->image)
                    <img src="{{ thumb($item->image, 'employees-list') }}" alt="">
                @endif
            </div>

            <div class="info">
                <div>

                    @if ($item->post)
                        <div class="post">{{ $item->post }}</div>
                    @endif

                    @if ($item->name)
                        <div class="name field">{{ $item->name }}</div>
                    @endif

                    @if ($item->phone)
                        <div class="phone field">
                            {{ __('site.employees-list.phone') }}: <a href="tel:{{ preg_replace("/[^0-9]/", '', $item->phone) }}">{{ $item->phone }}</a>
                        </div>
                    @endif

                    @if ($item->email)
                        <div class="email field">
                            E-mail: <a href="mailto:{{ $item->email }}">{{ $item->email }}</a>
                        </div>
                    @endif

                </div>
            </div>

        </div>

    @endforeach

</div>