@extends('layout.layoutDashboard')
@section('content')
@vite('resources/css/base.css')
<!-- Dashboard Cards -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="cards">
    <div class="card">
        <div class="card-header">
            <h3>Total Blog</h3>
            <i class="fa-solid fa-newspaper"></i>
        </div>
        <div class="card-content">
            <h2>{{ $totalPosts }}</h2>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>Total Users</h3>
            <i class="fas fa-user-plus"></i>
        </div>
        <div class="card-content">
            <h2>{{ $users }}</h2>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3>Total Comments</h3>
            <i class="fa-solid fa-comments"></i>
        </div>
        <div class="card-content">
            <h2>{{ $comments }}</h2>
        </div>
    </div>
</div>
<div>
    <div class="mt-[20px] card">
        <div class="text-3xl font-bold">Post</div>
        <canvas id="myChart"></canvas>
    </div>
</div>

<script type="text/javascript">
    var labels =  {{ Js::from($labels) }};
    var posts =  {{ Js::from($posts) }};
    
    const data = {
      labels: labels,
      datasets: [{
        label: '# of Votes',
        data: posts,
        borderWidth: 1
      }]
    };

    const config = {
      type: 'bar',
      data: data,
      options: {
        scales: {
        y: {
          beginAtZero: true
        }
      }
      }
    };

    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );

</script>
@endsection