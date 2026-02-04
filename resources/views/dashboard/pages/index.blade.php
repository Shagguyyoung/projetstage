@extends('dashboard.layouts.dashboard')

@section('title', 'Accueil')

@section('content')
<div class="p-6 space-y-8">

    <!-- Bande courbe en haut (Chart.js responsive) -->
    <div class="bg-white shadow rounded-lg">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Statistiques des promotions</h2>
        <!-- Canvas responsive -->
        <div class="w-[90%]">
            <canvas id="promoChart"></canvas>
        </div>
    </div>

    <!-- Tableau promotion -->
    <div class="bg-white shadow rounded-lg overflow-hidden">
        <div class="px-6 py-4 border-b">
            <h2 class="text-xl font-semibold text-gray-800">Promotions en cours</h2>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Code</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Montant</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mode</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">2025-11-05</td>
                        <td class="px-6 py-4 whitespace-nowrap">PROMO2025</td>
                        <td class="px-6 py-4 whitespace-nowrap">50 000 FCFA</td>
                        <td class="px-6 py-4 whitespace-nowrap">Carte</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="bg-[rgb(179,28,121)] text-white px-3 py-1 rounded hover:bg-purple-700 transition-colors">Voir</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">2025-11-04</td>
                        <td class="px-6 py-4 whitespace-nowrap">PROMO2024</td>
                        <td class="px-6 py-4 whitespace-nowrap">30 000 FCFA</td>
                        <td class="px-6 py-4 whitespace-nowrap">Espèces</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="bg-[rgb(179,28,121)] text-white px-3 py-1 rounded hover:bg-purple-700 transition-colors">Voir</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">2025-11-03</td>
                        <td class="px-6 py-4 whitespace-nowrap">PROMO2023</td>
                        <td class="px-6 py-4 whitespace-nowrap">75 000 FCFA</td>
                        <td class="px-6 py-4 whitespace-nowrap">Mobile</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <button class="bg-[rgb(179,28,121)] text-white px-3 py-1 rounded hover:bg-purple-700 transition-colors">Voir</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection

<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('promoChart').getContext('2d');
    new Chart(ctx, {
        type: 'line', // 'bar' pour barre
        data: {
            labels: ['2025-11-03', '2025-11-04', '2025-11-05'],
            datasets: [{
                label: 'Montant des promotions',
                data: [75000, 30000, 50000],
                backgroundColor: 'rgba(212, 151, 189, 1)',
                borderColor: 'rgba(212, 151, 189, 1)',
                borderWidth: 2,
                fill: true,
                tension: 0.4 // courbe arrondie
            }]
        },
        options: {
            responsive: true, // s’adapte automatiquement
            maintainAspectRatio: false, // permet de remplir le container
            plugins: {
                legend: { display: true },
                tooltip: { enabled: true }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
});
</script>
