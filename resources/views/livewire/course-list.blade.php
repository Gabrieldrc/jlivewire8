<ul>
    @foreach ($courses as $course)
    <li>
        {{ $course->id}}
    </li>
    @endforeach
</ul>
