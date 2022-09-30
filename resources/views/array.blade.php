<ul>
    <?php
        foreach ($task as $sor)
        {
            echo $sor;
        }
    ?>
</ul>

<ul>
    @foreach ($task as $sor)
        <li>{{$sor}}</li>
    @endforeach
    </ul>
<h1> {{$asd}} </h1>