<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Faculty;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faculty>
 */
class FacultyFactory extends Factory
{
    protected $model = Faculty::class;

    public function definition(): array
    {
        $name = $this->faker->unique()->randomElement([
            'Faculty of Education',
            'Faculty of Mathematics and Sciences',
            'Faculty of Economy',
            'Faculty of Sociology and Political Science',
            'Faculty of Vocational Engineering',
            'Faculty of Medical',
            'Faculty of Sports',
            'Faculty of Law',
        ]);

        return [
            'name' => $name,
            'slug' => str()->slug($name),
            'code' => str()->random(8),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function ($faculty) {
            $majors = match ($faculty->name) {
                'Faculty of Education' => [
                    'Pendidikan Sekolah Dasar',
                    'Pendidikan Usia Dini',
                ],
                'Faculty of Mathematics and Sciences' => [
                    'Sains Murni',
                    'Sains Terapan',
                    'Pendidikan Sains',
                ],
                'Faculty of Economy' => [
                    'Akutansi',
                    'Manajemen',
                ],
                'Faculty of Sociology and Political Science' => [
                    'Sosiologi',
                    'Ilmu Politik',
                ],
                'Faculty of Vocational Engineering' => [
                    'Teknik Industri',
                    'Teknik Informatika',
                ],
                'Faculty of Medical' => [
                    'Kedokteran',
                    'Kesehatan Masyarakat',
                ],
                'Faculty of Sports' => [
                    'Pendidikan Olahraga Kesehatan',
                ],
                'Faculty of Law' => [
                    'Ilmu Hukum',
                ],
                default => [],
            };

            foreach ($majors as $majorName) {
                $major = $faculty->majors()->create([
                    'name' => $majorName,
                    'slug' => str()->slug($majorName),
                    'code' => str()->random(8),
                ]);

                // Add study programs for each major
                $studyPrograms = match ($majorName) {
                    'Pendidikan Sekolah Dasar' => [
                        'Pendidikan Bimbingan Konseling',
                    ],
                    'Sains Murni' => [
                        'Matematika',
                        'Kimia',
                        'Fisika',
                        'Biologi',
                    ],
                    'Sains Terapan' => [
                        'Kimia Terapan',
                        'Fisika Terapan',
                    ],
                    'Pendidikan Sains' => [
                        'Pendidikan Matematika',
                        'Pendidikan Kimia',
                        'Pendidikan Fisika',
                        'Pendidikan Biologi',
                    ],
                    'Akutansi' => ['Akutansi'],
                    'Manajemen' => ['Manajemen'],
                    'Sosiologi' => ['Ilmu Sosiologi'],
                    'Ilmu Politik' => ['Ilmu Politik'],
                    'Teknik Industri' => [
                        'Teknik Elektro',
                        'Teknik Mesin',
                    ],
                    'Teknik Informatika' => [
                        'Teknik Informatika',
                        'Sistem Informasi',
                        'Ilmu Komputer',
                    ],
                    'Kedokteran' => ['Kedokteran'],
                    'Kesehatan Masyarakat' => ['Keperawatan'],
                    'Pendidikan Olahraga Kesehatan' => ['Pendidikan Olahraga Kesehatan'],
                    'Ilmu Hukum' => ['Ilmu Hukum'],
                    default => [],
                };

                foreach ($studyPrograms as $programName) {
                    $faculty->studyprograms()->create([
                        'name' => $programName,
                        'slug' => str()->slug($programName),
                        'code' => str()->random(8),
                        'majors_id' => $major->id,
                            // 'academicyears_id' => 1,

                    ]);
                }
            }
        });
    }
}
