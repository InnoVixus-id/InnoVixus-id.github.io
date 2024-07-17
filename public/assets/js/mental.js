function calculateResults() {
    const answers = document.querySelectorAll('select[name="answers[]"]');
    let depressionScore = 0;
    let anxietyScore = 0;
    let stressScore = 0;

    const questions = [
        'anxiety', 'depression', 'stress', 'stress', 'depression', 'anxiety', 'depression', 'stress', 'stress',
        'depression', 'anxiety', 'depression', 'anxiety', 'stress', 'depression', 'stress', 'depression', 'anxiety', 
        'anxiety', 'anxiety', 'stress' 
    ];

    answers.forEach((answer, index) => {
        const value = parseInt(answer.value);
        switch (questions[index]) {
            case 'depression':
                depressionScore += value;
                break;
            case 'anxiety':
                anxietyScore += value;
                break;
            case 'stress':
                stressScore += value;
                break;
        }
    });

    const depressionResult = getCategoryResult(depressionScore, 'depression');
    const anxietyResult = getCategoryResult(anxietyScore, 'anxiety');
    const stressResult = getCategoryResult(stressScore, 'stress');

    document.getElementById('result').innerHTML = `
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="bg-white p-6 rounded shadow-md">
                <h2 class="text-2xl font-bold mb-4 text-center">Depresi</h2>
                <p class="text-gray-700 mb-2">Skor: ${depressionScore}</p>
                <p class="text-gray-700 mb-2">Kategori: ${depressionResult.category}</p>
                <p class="text-gray-700 mb-2">${depressionResult.description}</p>
                <p class="text-gray-700">${depressionResult.advice}</p>
            </div>
            <div class="bg-white p-6 rounded shadow-md">
                <h2 class="text-2xl font-bold mb-4 text-center">Cemas</h2>
                <p class="text-gray-700 mb-2">Skor: ${anxietyScore}</p>
                <p class="text-gray-700 mb-2">Kategori: ${anxietyResult.category}</p>
                <p class="text-gray-700 mb-2">${anxietyResult.description}</p>
                <p class="text-gray-700">${anxietyResult.advice}</p>
            </div>
            <div class="bg-white p-6 rounded shadow-md">
                <h2 class="text-2xl font-bold mb-4 text-center">Stres</h2>
                <p class="text-gray-700 mb-2">Skor: ${stressScore}</p>
                <p class="text-gray-700 mb-2">Kategori: ${stressResult.category}</p>
                <p class="text-gray-700 mb-2">${stressResult.description}</p>
                <p class="text-gray-700">${stressResult.advice}</p>
            </div>
        </div>
    `;
}

function getCategoryResult(score, category) {
    let result = {
        category: '',
        description: '',
        advice: ''
    };

    if (category == 'depression') {
        result.category = (score <= 11) ? 'Rendah' : (score <= 24) ? 'Sedang' : 'Tinggi';
        switch (result.category) {
            case 'Rendah':
                result.description = 'Anda memiliki tingkat depresi yang rendah.';
                result.advice = 'Tetap menjaga kesehatan mental Anda dengan aktivitas yang menyenangkan dan berkualitas.';
                break;
            case 'Sedang':
                result.description = 'Anda memiliki tingkat depresi yang sedang.';
                result.advice = 'Pertimbangkan untuk berkonsultasi dengan profesional untuk bantuan lebih lanjut.';
                break;
            case 'Tinggi':
                result.description = 'Anda memiliki tingkat depresi yang tinggi.';
                result.advice = 'Segera cari bantuan dari profesional kesehatan mental.';
                break;
        }
    } else if (category == 'anxiety') {
        result.category = (score <= 11) ? 'Rendah' : (score <= 24) ? 'Sedang' : 'Tinggi';
        switch (result.category) {
            case 'Rendah':
                result.description = 'Anda memiliki tingkat kecemasan yang rendah.';
                result.advice = 'Terus lakukan aktivitas yang dapat membantu mengurangi kecemasan Anda.';
                break;
            case 'Sedang':
                result.description = 'Anda memiliki tingkat kecemasan yang sedang.';
                result.advice = 'Pertimbangkan untuk mencari teknik pengelolaan stres atau konseling jika diperlukan.';
                break;
            case 'Tinggi':
                result.description = 'Anda memiliki tingkat kecemasan yang tinggi.';
                result.advice = 'Segera cari bantuan profesional untuk menangani kecemasan Anda.';
                break;
        }
    } else if (category == 'stress') {
        result.category = (score <= 11) ? 'Rendah' : (score <= 24) ? 'Sedang' : 'Tinggi';
        switch (result.category) {
            case 'Rendah':
                result.description = 'Anda memiliki tingkat stres yang rendah.';
                result.advice = 'Pertahankan pola hidup yang sehat dan kelola stres dengan baik.';
                break;
            case 'Sedang':
                result.description = 'Anda memiliki tingkat stres yang sedang.';
                result.advice = 'Cari cara untuk mengurangi beban stres harian Anda.';
                break;
            case 'Tinggi':
                result.description = 'Anda memiliki tingkat stres yang tinggi.';
                result.advice = 'Prioritaskan waktu untuk istirahat dan relaksasi, serta pertimbangkan untuk mencari bantuan jika diperlukan.';
                break;
        }
    }

    return result;
}
