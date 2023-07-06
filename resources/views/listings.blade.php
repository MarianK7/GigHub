<h1>{{$heading}}</h1>
<p>Here are all current listings.</p>

@unless (count($listings) == 0)
    
@foreach ($listings as $listing)
    <h2>
        <a href="/listings/{{$listing['id']}}">{{$listing['title']}}</a>
    </h2>
    <p>
        {{$listing['description']}}
    </p>
    <p>
        <strong>
            Budget: 
        </strong>

        {{$listing['budget']}}
    </p>
@endforeach

@else
    <p>
        There are no listings.
    </p>
@endunless