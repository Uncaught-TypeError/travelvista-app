<x-admin-layout>
    <x-slot name="body">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="px-4 py-4 md:px-10 md:py-7">
                    <div class="flex items-center justify-between">
                        <p tabindex="0" class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-xl lg:text-2xl">Admin Dashboard</p>
                    </div>
                    <div class="flex flex-col md:flex-row justify-start my-10 items-center gap-5">
                        <div class="border p-4">
                            <span class="text-xl font-bold">Total Analysis Bar Chart</span>
                        </div>
                        <div class="w-[750px] h-auto m-auto">
                            @php
                                $bookingCounts = null;
                                $pbookingCounts = null;

                                foreach ($bookings as $booking) {
                                    $bookingCounts++;
                                }
                                foreach ($packagebookings as $pbooking) {
                                    $pbookingCounts++;
                                }
                                $data3 = [
                                    'labels' => ['Tour Bookings', 'Package Bookings'],
                                    'datasets' => [
                                        [
                                            'label' => 'Bookings Comparison',
                                            'data' => [$bookingCounts, $pbookingCounts],
                                            'backgroundColor' => ['lightblue', 'lightgreen'],
                                            'borderColor' => 'rgba(54, 162, 235, 1)',
                                            'borderWidth' => 1,
                                        ]
                                    ]
                                ];
                            @endphp
                            <canvas id="myChart3"></canvas>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row my-10 items-center gap-5">
                        <div class="w-[400px] h-auto m-auto justify-start">
                            {{-- @php
                                $bookingCounts = [];

                                foreach ($bookings as $booking) {
                                    foreach ($tours as $tour) {
                                        if($tour->id == $booking->id){
                                            $bookingName = $tour->tour_destination;
                                            if (!isset($bookingCounts[$bookingName])) {
                                                $bookingCounts[$bookingName] = 1;
                                            }
                                            else {
                                                $bookingCounts[$bookingName]++;
                                            }
                                        }
                                    }
                                }

                                arsort($bookingCounts);

                                $chartLabels = array_keys($bookingCounts);
                                $chartData = array_values($bookingCounts);
                            @endphp --}}
                            @php
                                $bookingCounts = [];

                                foreach ($bookings as $booking) {
                                    $statusName = $booking->status;
                                    if (!isset($bookingCounts[$statusName])) {
                                        $bookingCounts[$statusName] = 1;
                                    } else {
                                        $bookingCounts[$statusName]++;
                                    }
                                }

                                arsort($bookingCounts);

                                $chartLabels2 = array_keys($bookingCounts);
                                $chartData2 = array_values($bookingCounts);

                            @endphp

                            <canvas id="myChart2"></canvas>
                        </div>
                        <div class="border p-4">
                            <span class="text-xl font-bold">Bookings Analysis Pie Chart</span>
                        </div>
                    </div>
                    <div class="flex flex-col md:flex-row justify-start my-10 items-center gap-5">
                        <div class="border p-4">
                            <span class="text-xl font-bold">Tour Destination Analysis Polar Area Chart</span>
                        </div>
                        <div class="w-[600px] h-auto m-auto">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>
</x-admin-layout>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const data3 = @json($data3);

    const config3 = {
        type: 'bar',
        data: data3,
        options: {}
    };

    new Chart(
        document.getElementById('myChart3'),
        config3
    );
</script>
<script>
    const chartLabels2 = @json($chartLabels2);
    const chartData2 = @json($chartData2);

    const data2 = {
        labels: chartLabels2,
        datasets: [{
            label: 'Status',
            data: chartData2,
            backgroundColor: ['#ffdaba', '#c9ffba', '#ffbaba'],
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1,
        }]
    };

    const config2 = {
        type: 'pie',
        data: data2,
        options: {}
    };

    new Chart(
        document.getElementById('myChart2'),
        config2
    );
</script>
<script>
    const destinationCounts = @json($destinationCounts);

    const data = {
        labels: Object.keys(destinationCounts),
        datasets: [
            {
                label: 'Number of Tours',
                data: Object.values(destinationCounts),
                backgroundColor: ['lightblue', 'lightpink', 'lightgreen', 'lightyellow', 'lightcyan', 'lightcoral', 'lightsalmon', 'lightseagreen'],
                borderWidth: 1,
            }
        ]
    };

    const config = {
        type: 'polarArea',
        data: data,
        options: {}
    };

    new Chart(
        document.getElementById('myChart'),
        config
    );
</script>
