<nav class="breadcrumb pd-0 mg-0 tx-12">
    <a class="breadcrumb-item tx-bold" style="color:red;" href="{{ url('/admin/dashboard') }}">
        <i class="fa fa-home"></i> Webschool
    </a>

    @php
        $currentUrl = request()->url(); // Get the current URL
        $pathSegments = explode('/', $currentUrl); // Explode the URL by '/'
    @endphp

    @if (isset($pathSegments[4]))
        @php
            $segmentToExplode = $pathSegments[4]; // Get the 5th segment
            $explodedSegment = explode('-', $segmentToExplode); // Explode the 5th segment by '-'
        @endphp

        @if (count($explodedSegment) >= 2)
            <a class="breadcrumb-item" href="#">{{ ucfirst($explodedSegment[0]) }} {{ ucfirst($explodedSegment[1]) }}</a>
        @else
            <a class="breadcrumb-item" href="#">{{ ucfirst($segmentToExplode) }}</a>
        @endif
    @endif

    @if (isset($pathSegments[5]))
        <a class="breadcrumb-item" href="#">{{ ucfirst($pathSegments[5]) }}</a>
    @endif
</nav>
