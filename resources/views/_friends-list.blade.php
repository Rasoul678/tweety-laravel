<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul>
    @foreach(range(1, 6 ) as $index)
    <li class="mb-3">
        <div class="flex items-center">
            <img class="rounded-full mr-2" src="https://i.pravatar.cc/50?img=1" alt="avatar">
            John Doe
        </div>
    </li>
    @endforeach
</ul>
