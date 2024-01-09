<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col gap-4 md:flex-row md:items-center md:justify-between">
            <h2 class="text-xl font-semibold leading-tight">
                {{ auth()->user()->posisi === 'SPV' || auth()->user()->posisi === 'Manajer' ? __('Admin Dashboard') : __('QIRA Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <form action="{{ route('dashboard.filter') }}" method="GET" class="mb-4 flex items-center space-x-4 align-middle">
        <div class="flex flex-col">
            <label for="start_month" class="text-xs text-gray-600">Start Month:</label>
            <input type="month" name="start_month" id="start_month" value="{{ request('start_month') }}" class="mt-1 p-2 text-xs border rounded-md focus:outline-none focus:border-blue-500">
        </div>

        <div class="flex flex-col">
            <label for="end_month" class="text-xs text-gray-600">End Month:</label>
            <input type="month" name="end_month" id="end_month" value="{{ request('end_month') }}" class="mt-1 p-2 text-xs border rounded-md focus:outline-none focus:border-blue-500">
        </div>

        <button type="submit" class="mt-5 p-2 text-xs bg-blue-500 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:shadow-outline-blue active:bg-blue-800">
            Filter
        </button>
    </form>

    <div class="relative">
        <div class="grid grid-cols-1 gap-4 sm:grid-cols-1 md:grid-cols-3 text-center">
            <!-- Line Diecasting Section -->
            <div class="bg-white rounded-md shadow-md p-4">
                <h2 class="text-xl font-semibold mb-4">Line Diecasting</h2>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
                    <div>
                        <h3 class="text-l font-semibold mb-4">Progress Check PCR/New Project</h3>
                        <canvas id="lineDiecastingProjectChart" class="w-full h-32 md:h-48 lg:h-64"></canvas>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Progress Monthly Check TCC</h3>
                        <canvas id="lineDCTCCChart" class="w-full h-32 md:h-48 lg:h-64"></canvas>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Progress Monthly Check Oilpan</h3>
                        <canvas id="lineDCOilpanChart" class="w-full h-32 md:h-48 lg:h-64"></canvas>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Progress Monthly Check CSH</h3>
                        <canvas id="lineDCCSHProjectChart" class="w-full h-32 md:h-48 lg:h-64"></canvas>
                    </div>
                </div>
                <!-- Add more charts and content for Line Diecasting as needed -->
            </div>

            <!-- Line Assembling Section -->
            <div class="bg-white rounded-md shadow-md p-4">
                <h2 class="text-xl font-semibold mb-4">Line Assembling</h2>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
                    <div>
                        <h3 class="text-l font-semibold mb-4">Progress Check PCR/New Project</h3>
                        <canvas id="lineAssemblingProjectChart" class="w-full h-32 md:h-48 lg:h-64"></canvas>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Progress Monthly Check WP/OP</h3>
                        <canvas id="lineASWPOPChart" class="w-full h-32 md:h-48 lg:h-64"></canvas>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Progress Monthly Check TCC</h3>
                        <canvas id="lineASTCCChart" class="w-full h-32 md:h-48 lg:h-64"></canvas>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Progress Monthly Check Oilpan</h3>
                        <canvas id="lineASOilpanChart" class="w-full h-32 md:h-48 lg:h-64"></canvas>
                    </div>
                </div>
                <!-- Add more charts and content for Line Assembling as needed -->
            </div>

            <!-- Line Machining Section -->
            <div class="bg-white rounded-md shadow-md p-4">
                <h2 class="text-xl font-semibold mb-4">Line Machining</h2>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-2">
                    <div>
                        <h3 class="text-l font-semibold mb-4">Progress Check PCR/New Project</h3>
                        <canvas id="lineMachiningProjectChart" class="w-full h-32 md:h-48 lg:h-64"></canvas>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Progress Monthly Check TCC</h3>
                        <canvas id="lineMATCCChart" class="w-full h-32 md:h-48 lg:h-64"></canvas>
                    </div>
                    <div>
                        <h3 class="text-l font-semibold mb-4">Progress Monthly Check Oilpan</h3>
                        <canvas id="lineMAOilpanChart" class="w-full h-32 md:h-48 lg:h-64"></canvas>
                    </div>
                </div>
                <!-- Add more charts and content for Line Machining as needed -->
            </div>
        </div>

        <div class="fixed bottom-5 right-5">
            <button id="openModalButton" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-full flex items-center space-x-2">
                <x-css-danger class="flex-shrink-0 w-6 h-6" aria-hidden="true" />
                <span>Latest Issue</span>
            </button>
        </div>

        <div id="myModal" class="modal hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="modal-content w-full sm:w-full md:w-2/3 lg:w-2/3 xl:w-1/2 p-4">
                <div class="p-6 overflow-hidden bg-white rounded-md shadow-md dark:bg-dark-eval-1 relative">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="w-full sm:w-full md:w-full p-4">
                            <button id="closeModalButton" class="absolute top-3 right-3 text-gray-600 hover:text-gray-800">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                            <h2 class="text-center text-xl font-semibold mb-4">Customer Information Problem</h2>
                            <div class="flex flex-wrap gap-4">
                                <div class="w-full md:w-full">
                                    <canvas id="customerQuantityChart"></canvas>
                                </div>
                                <div class="w-full md:w-full">
                                    <canvas id="customerQuantityYearChart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="w-full sm:w-full md:w-full p-4">
                            <h2 class="text-center text-xl font-semibold mb-4">Description of Last Problem</h2>
                            <table class="w-full border-collapse text-xs">
                                @foreach ($customerProblems as $customerProblem)
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="w-1/2 py-2 px-4 border">
                                            @if ($customerProblem->photo)
                                            <img src="{{ Storage::url($customerProblem->photo) }}" alt="Problem Photo" class="max-w-full h-auto rounded">
                                            @else
                                            No photo available
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="font-semibold py-1 px-2 border">Problem:</td>
                                        <td class="py-1 px-2 border">{{ $customerProblem->problem }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-semibold py-1 px-2 border">Date of Problem:</td>
                                        <td class="py-1 px-2 border">{{ $customerProblem->date_of_problem }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-semibold py-1 px-2 border">Customer:</td>
                                        <td class="py-1 px-2 border">{{ $customerProblem->customer }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-semibold py-1 px-2 border">Model Product:</td>
                                        <td class="py-1 px-2 border">{{ $customerProblem->model_product }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-semibold py-1 px-2 border">Quantity Product:</td>
                                        <td class="py-1 px-2 border">{{ $customerProblem->quantity_product }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-semibold py-1 px-2 border">Process Problem:</td>
                                        <td class="py-1 px-2 border">{{ $customerProblem->process_problem }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-semibold py-1 px-2 border">Date of Process:</td>
                                        <td class="py-1 px-2 border">{{ $customerProblem->date_of_process }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-semibold py-1 px-2 border">Status Problem:</td>
                                        <td class="py-1 px-2 border">{{ $customerProblem->status_problem }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-semibold py-1 px-2 border">Status Kaizen:</td>
                                        <td class="py-1 px-2 border">{{ $customerProblem->status_kaizen }}</td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Ambil elemen tombol dan modal
        var openModalButton = document.getElementById("openModalButton");
        var closeModalButton = document.getElementById("closeModalButton");
        var modal = document.getElementById("myModal");

        openModalButton.addEventListener("click", function() {
            modal.classList.remove("hidden");
        });

        closeModalButton.addEventListener("click", function() {
            modal.classList.add("hidden");
        });

        modal.addEventListener("click", function(event) {
            if (event.target === modal) {
                modal.classList.add("hidden");
            }
        });

        // Problem Monthly
        var customerChartData = @json($customerChartData);

        var ctx = document.getElementById('customerQuantityChart').getContext('2d');
        var customerQuantityChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: customerChartData.labels.map(label => {
                    const [year, month] = label.split('-');
                    return new Intl.DateTimeFormat('en', {
                        year: 'numeric',
                        month: 'long'
                    }).format(new Date(year, month - 1));
                }),
                datasets: customerChartData.datasets
            },
            options: {
                scales: {
                    x: {
                        stacked: true
                    },
                    y: {
                        stacked: true,
                        beginAtZero: true
                    }
                }
            }
        });

        // Problem Annually
        var customerChartDataYear = @json($customerChartDataYear);

        var ctxYear = document.getElementById('customerQuantityYearChart').getContext('2d');
        var customerQuantityYearChart = new Chart(ctxYear, {
            type: 'bar',
            data: {
                labels: customerChartDataYear.labels,
                datasets: customerChartDataYear.datasets
            },
            options: {
                scales: {
                    x: {
                        stacked: true
                    },
                    y: {
                        stacked: true,
                        beginAtZero: true
                    }
                }
            }
        });

        // Line Diecasting Project
        var lineDiecastingData = @json($lineDiecastingProjectData);

        var finishedCounts = lineDiecastingData.map(item => item.finished_count);
        var onProgressCounts = lineDiecastingData.map(item => item.onprogress_count);

        var ctxLineDiecasting = document.getElementById('lineDiecastingProjectChart').getContext('2d');
        var lineDiecastingChart = new Chart(ctxLineDiecasting, {
            type: 'doughnut',
            data: {
                labels: ['Finished', 'OnProgress'],
                datasets: [{
                    label: 'Project',
                    data: [finishedCounts.reduce((a, b) => a + b, 0), onProgressCounts.reduce((a, b) => a + b, 0)],
                    backgroundColor: ['#4CAF50', '#FFC107'],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Line Machining Project
        var lineMachiningData = @json($lineMachiningProjectData);

        var finishedCounts = lineMachiningData.map(item => item.finished_count);
        var onProgressCounts = lineMachiningData.map(item => item.onprogress_count);

        var ctxLineMachining = document.getElementById('lineMachiningProjectChart').getContext('2d');
        var lineMachiningChart = new Chart(ctxLineMachining, {
            type: 'doughnut',
            data: {
                labels: ['Finished', 'OnProgress'],
                datasets: [{
                    label: 'Project',
                    data: [finishedCounts.reduce((a, b) => a + b, 0), onProgressCounts.reduce((a, b) => a + b, 0)],
                    backgroundColor: ['#4CAF50', '#FFC107'],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Line Assembling Project
        var lineAssemblingData = @json($lineAssemblingProjectData);

        var finishedCountsAssembling = lineAssemblingData.map(item => item.finished_count);
        var onProgressCountsAssembling = lineAssemblingData.map(item => item.onprogress_count);

        var ctxLineAssembling = document.getElementById('lineAssemblingProjectChart').getContext('2d');
        var lineAssemblingChart = new Chart(ctxLineAssembling, {
            type: 'doughnut',
            data: {
                labels: ['Finished', 'OnProgress'],
                datasets: [{
                    label: 'Project',
                    data: [finishedCountsAssembling.reduce((a, b) => a + b, 0), onProgressCountsAssembling.reduce((a, b) => a + b, 0)],
                    backgroundColor: ['#4CAF50', '#FFC107'],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Line DCTCC Project
        var lineDCTCCData = @json($linedctcc);

        var finishedCountsDCTCC = lineDCTCCData.map(item => item.finished_count);
        var onProgressCountsDCTCC = lineDCTCCData.map(item => item.on_progress_count);

        var ctxLineDCTCC = document.getElementById('lineDCTCCChart').getContext('2d');
        var lineDCTCCChart = new Chart(ctxLineDCTCC, {
            type: 'doughnut',
            data: {
                labels: ['Finished', 'On Progress'],
                datasets: [{
                    label: 'Project',
                    data: [finishedCountsDCTCC.reduce((a, b) => a + b, 0), onProgressCountsDCTCC.reduce((a, b) => a + b, 0)],
                    backgroundColor: ['#4CAF50', '#FFC107'],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Line DCOilpan Project
        var dcOilpanData = @json($lineDCOilpanData);

        var finishedCountsDCOilpan = dcOilpanData.map(item => item.finished_count);
        var onProgressCountsDCOilpan = dcOilpanData.map(item => item.on_progress_count);

        var ctxDCOilpan = document.getElementById('lineDCOilpanChart').getContext('2d');
        var lineDCOilpanChart = new Chart(ctxDCOilpan, {
            type: 'doughnut',
            data: {
                labels: ['Finished', 'On Progress'],
                datasets: [{
                    label: 'Project',
                    data: [finishedCountsDCOilpan, onProgressCountsDCOilpan],
                    backgroundColor: ['#4CAF50', '#FFC107'],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Line DC Model CSH Project
        var lineDCCSHData = @json($linedccsh);

        var finishedCountsDCCSH = lineDCCSHData.map(item => item.finished_count);
        var onProgressCountsDCCSH = lineDCCSHData.map(item => item.on_progress_count);

        var ctxLineDCCSH = document.getElementById('lineDCCSHProjectChart').getContext('2d');
        var lineDCCSHChart = new Chart(ctxLineDCCSH, {
            type: 'doughnut',
            data: {
                labels: ['Finished', 'On Progress'],
                datasets: [{
                    label: 'Project',
                    data: [finishedCountsDCCSH.reduce((a, b) => a + b, 0), onProgressCountsDCCSH.reduce((a, b) => a + b, 0)],
                    backgroundColor: ['#4CAF50', '#FFC107'],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Line MA Model TCC Project
        var lineMATCCData = @json($lineMATCCData);

        var finishedCountsMATCC = lineMATCCData.map(item => item.finished_count);
        var onProgressCountsMATCC = lineMATCCData.map(item => item.on_progress_count);

        var ctxLineMATCC = document.getElementById('lineMATCCChart').getContext('2d');
        var lineMATCCChart = new Chart(ctxLineMATCC, {
            type: 'doughnut',
            data: {
                labels: ['Finished', 'On Progress'],
                datasets: [{
                    label: 'Project',
                    data: [finishedCountsMATCC.reduce((a, b) => a + b, 0), onProgressCountsMATCC.reduce((a, b) => a + b, 0)],
                    backgroundColor: ['#4CAF50', '#FFC107'],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Line MA Oilpan Project
        var lineMAOilpanData = @json($lineMAOilpanData);

        var finishedCountsMAOilpan = lineMAOilpanData.map(item => item.finished_count);
        var onProgressCountsMAOilpan = lineMAOilpanData.map(item => item.on_progress_count);

        var ctxLineMAOilpan = document.getElementById('lineMAOilpanChart').getContext('2d');
        var lineMAOilpanChart = new Chart(ctxLineMAOilpan, {
            type: 'doughnut',
            data: {
                labels: ['Finished', 'On Progress'],
                datasets: [{
                    label: 'Project',
                    data: [finishedCountsMAOilpan.reduce((a, b) => a + b, 0), onProgressCountsMAOilpan.reduce((a, b) => a + b, 0)],
                    backgroundColor: ['#4CAF50', '#FFC107'],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Line AS TCC Project
        var lineASTCCData = @json($lineASTCCData);

        var finishedCountsASTCC = lineASTCCData.map(item => item.finished_count);
        var onProgressCountsASTCC = lineASTCCData.map(item => item.on_progress_count);

        var ctxLineASTCC = document.getElementById('lineASTCCChart').getContext('2d');
        var lineASTCCChart = new Chart(ctxLineASTCC, {
            type: 'doughnut',
            data: {
                labels: ['Finished', 'On Progress'],
                datasets: [{
                    label: 'Project',
                    data: [finishedCountsASTCC.reduce((a, b) => a + b, 0), onProgressCountsASTCC.reduce((a, b) => a + b, 0)],
                    backgroundColor: ['#4CAF50', '#FFC107'],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Line AS Oilpan Project
        var lineASOilpanData = @json($lineASOilpanData);

        var finishedCountsASOilpan = lineASOilpanData.map(item => item.finished_count);
        var onProgressCountsASOilpan = lineASOilpanData.map(item => item.on_progress_count);

        var ctxLineASOilpan = document.getElementById('lineASOilpanChart').getContext('2d');
        var lineASOilpanChart = new Chart(ctxLineASOilpan, {
            type: 'doughnut',
            data: {
                labels: ['Finished', 'On Progress'],
                datasets: [{
                    label: 'Project',
                    data: [finishedCountsASOilpan.reduce((a, b) => a + b, 0), onProgressCountsASOilpan.reduce((a, b) => a + b, 0)],
                    backgroundColor: ['#4CAF50', '#FFC107'],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });

        // Line AS WP/OP Project
        var lineASWPOPData = @json($lineASWPOPData);

        var finishedCountsASWPOP = lineASWPOPData.map(item => item.finished_count);
        var onProgressCountsASWPOP = lineASWPOPData.map(item => item.on_progress_count);

        var ctxLineASWPOP = document.getElementById('lineASWPOPChart').getContext('2d');
        var lineASWPOPChart = new Chart(ctxLineASWPOP, {
            type: 'doughnut',
            data: {
                labels: ['Finished', 'On Progress'],
                datasets: [{
                    label: 'Project',
                    data: [finishedCountsASWPOP.reduce((a, b) => a + b, 0), onProgressCountsASWPOP.reduce((a, b) => a + b, 0)],
                    backgroundColor: ['#4CAF50', '#FFC107'],
                    hoverOffset: 4
                }]
            },
            options: {
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom'
                    }
                }
            }
        });
    </script>

</x-app-layout>