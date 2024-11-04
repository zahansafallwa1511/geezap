@extends('v2.layouts.app')
@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-[#12122b]">
    <!-- Background Pattern -->
    <div class="absolute inset-0 opacity-10" style="background-image: url('https://placehold.co/1920x800/2a2a4a/FFFFFF'); background-size: cover;"></div>

    <div class="max-w-7xl mx-auto px-6 relative">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-8">
                <!-- Stats Banner -->
                <div class="inline-block px-4 py-2 bg-pink-500/10 backdrop-blur-sm rounded-full font-ubuntu-light">
                    <span class="font-oxanium text-pink-300 font-medium">🎯 Over {{$availableJobs}}+ jobs available</span>
                </div>

                <!-- Main Heading -->
                <h1 class="text-5xl md:text-6xl font-oxanium-bold text-white leading-tight">
                    Find Your Next <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-500">
                        Dream Job
                    </span> in Tech
                </h1>

                <!-- Subheading -->
                <p class="text-xl text-gray-100 font-ubuntu-light leading-relaxed">
                    Join thousands of developers who have found their perfect roles through our platform. We connect talented developers with top tech companies.
                </p>

                <!-- Search Box -->
                <div class="bg-white/10 backdrop-blur-md p-3 rounded-2xl border border-white/10">
                    <form action="{{route('job.index')}}" method="get">
                    <div class="flex flex-col md:flex-row gap-3">
                        <!-- Job Search -->
                        <div class="flex-1 flex items-center gap-3 bg-white/10 rounded-xl px-4 py-3">
                            <i class="las la-search text-pink-500"></i>
                            <input
                                   name="search"
                                   type="text"
                                   placeholder="Job title or keyword"
                                   class="w-full bg-transparent text-white placeholder-gray-400 focus:outline-none">
                        </div>
                        <!-- Search Button -->
                        <button class="font-ubuntu-regular md:w-auto w-full bg-gradient-to-r from-pink-500 to-purple-600 text-white px-8 py-3 rounded-xl hover:opacity-90 transition-opacity font-medium">
                            Search Jobs
                        </button>
                    </div>
                    </form>
                </div>

                <!-- Popular Searches -->
                <div class="space-y-3">
                    <h3 class="text-gray-100 font-medium">Popular Searches:</h3>
                    <div class="flex flex-wrap gap-3">
                            <span class="px-4 py-2 bg-white/5 border border-white/10 hover:border-pink-500 text-gray-100 rounded-full text-sm cursor-pointer transition-colors">
                                Remote Jobs
                            </span>
                        <span class="px-4 py-2 bg-white/5 border border-white/10 hover:border-pink-500 text-gray-100 rounded-full text-sm cursor-pointer transition-colors">
                                Full Stack Developer
                            </span>
                        <span class="px-4 py-2 bg-white/5 border border-white/10 hover:border-pink-500 text-gray-100 rounded-full text-sm cursor-pointer transition-colors">
                                Frontend Engineer
                            </span>
                        <span class="px-4 py-2 bg-white/5 border border-white/10 hover:border-pink-500 text-gray-100 rounded-full text-sm cursor-pointer transition-colors">
                                React Developer
                            </span>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="grid grid-cols-3 gap-6 pt-4">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-1">{{$availableJobs}}+</div>
                        <div class="text-gray-300 text-sm">Active Jobs</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-1">{{$jobCategoriesCount}}+</div>
                        <div class="text-gray-300 text-sm">Categories</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-1">{{App\Models\User::count()}}+</div>
                        <div class="text-gray-300 text-sm">Developers</div>
                    </div>
                </div>
            </div>

            <!-- Right Content -->
            <div class="hidden md:block relative">
                <!-- Main Image -->
                <img src="https://placehold.co/600x500/2a2a4a/FFFFFF"
                     alt="Developer Working"
                     class="rounded-2xl shadow-2xl">

                <!-- Floating Card 1 -->
                <div class="absolute -top-6 -left-6 bg-[#1a1a3a]/90 backdrop-blur-sm p-4 rounded-xl border border-white/10">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-pink-500/20 rounded-full flex items-center justify-center">
                            <i class="las la-code text-pink-500"></i>
                        </div>
                        <div>
                            <div class="text-white font-medium">1,200+</div>
                            <div class="text-gray-400 text-sm">Developer Jobs</div>
                        </div>
                    </div>
                </div>

                <!-- Floating Card 2 -->
                <div class="absolute -bottom-6 -right-6 bg-[#1a1a3a]/90 backdrop-blur-sm p-4 rounded-xl border border-white/10">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-purple-500/20 rounded-full flex items-center justify-center">
                            <i class="las la-building text-purple-500"></i>
                        </div>
                        <div>
                            <div class="text-white font-medium">500+</div>
                            <div class="text-gray-400 text-sm">Tech Companies</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-20 bg-[#12122b]">
    <div class="max-w-7xl mx-auto px-6">
        <div class="flex justify-between items-end mb-12">
            <div>
                <h2 class="text-3xl font-bold mb-2 text-white">Most Viewed Jobs</h2>
                <p class="text-gray-300">Discover the positions developers are exploring</p>
            </div>
            <!-- Add this button -->
            <a href="{{route('job.index')}}" class="font-ubuntu-regular bg-gradient-to-r from-pink-500 to-purple-600 hover:opacity-90 transition-opacity text-white px-6 py-3 rounded-xl font-medium flex items-center gap-2">
                See All Jobs
                <i class="las la-arrow-right"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @foreach($latestJobs as $job)
                <div class="bg-[#1a1a3a] rounded-2xl border border-gray-700 group hover:border-pink-500/50 transition">
                    <div class="relative">
                        <img src="{{ $job->employer_logo ?? 'https://placehold.co/400x200/2a2a4a/FFFFFF' }}" alt="Job"
                             class="w-full h-48 object-cover rounded-t-2xl">
                        <div class="absolute top-4 right-4 bg-pink-500/90 backdrop-blur-sm px-3 py-1 rounded-full text-sm text-white">
                            {{ $job->views }} views
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-4 mb-4">
                            <img src="{{ $job->employer_logo ?? 'https://placehold.co/50x50/2a2a4a/FFFFFF' }}" alt="{{ $job->employer_name }}"
                                 class="w-12 h-12 rounded-xl">
                            <div>
                                <h3 class="text-xl font-semibold text-white">{{ $job->job_title }}</h3>
                                <p class="text-gray-300">{{ $job->employer_name }} • {{ $job->is_remote ? 'Remote' : $job->city }}</p>
                            </div>
                        </div>
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-pink-500/10 text-pink-300 rounded-full text-sm">{{ $job->job_category }}</span>
                            <span class="px-3 py-1 bg-pink-500/10 text-pink-300 rounded-full text-sm">{{ $job->employment_type }}</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-pink-300 font-semibold">${{ $job->min_salary }} - ${{ $job->max_salary }}</span>
                            <a href="{{ route('job.show', $job->slug) }}" class="px-4 py-2 bg-pink-500/10 text-pink-300 rounded-lg hover:bg-pink-500/20">
                                Apply Now
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center mt-12">
            <a href="{{route('job.index')}}" class="bg-gradient-to-r from-pink-500 to-purple-600 hover:opacity-90 transition-opacity text-white px-8 py-4 rounded-xl font-medium flex items-center gap-2 text-lg">
                Explore All Job Opportunities
                <i class="las la-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Job Categories -->
<section class="py-20 bg-[#12122b]">
    <div class="max-w-7xl mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-2 text-white">Browse by Category</h2>
            <p class="text-gray-300">Find your perfect role in these specialized areas</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach($jobCategories as $category)
                <div class="group bg-[#1a1a3a] rounded-2xl p-6 hover:bg-[#222250] transition border border-gray-700 hover:border-pink-500/50">
                    <div class="w-14 h-14 bg-pink-500/10 rounded-xl flex items-center justify-center mb-4 group-hover:bg-pink-500/20">
                        <img src="{{ $category->category_image ?? 'https://placehold.co/50x50/2a2a4a/FFFFFF' }}" class="w-8 h-8" alt="{{ $category->job_category }}">
                    </div>
                    <h3 class="text-xl font-semibold mb-2 text-white">{{ ucwords($category->job_category) }}</h3>
                    <p class="text-gray-300 mb-4">{{ $category->total_jobs }} open positions</p>
                    <a href="{{ url('jobs?category=' . $category->job_category) }}" class="flex items-center text-pink-300 hover:text-pink-400 transition">
                        Browse Jobs <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                </div>
            @endforeach
        </div>

        <div class="flex justify-center mt-12">
            <a href="{{route('job.categories')}}" class="font-ubuntu-regular bg-gradient-to-r from-pink-500 to-purple-600 hover:opacity-90 transition-opacity text-white px-8 py-4 rounded-xl font-medium flex items-center gap-2 text-lg">
                See All Categories
                <i class="las la-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-[#0A0A1B]">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="bg-[#12122b] rounded-2xl p-8 text-center">
                <div class="text-4xl font-oxanium-semibold text-white">{{$lastWeekAddedJobsCount}}</div>
                <div class="text-gray-300">Job Added in Last Week</div>
            </div>
            <div class="bg-[#12122b] rounded-2xl p-8 text-center">
                <div class="text-4xl font-oxanium-semibold text-white">{{$todayAddedJobsCount}}</div>
                <div class="text-gray-300">Today Added Jobs</div>
            </div>
            <div class="bg-[#12122b] rounded-2xl p-8 text-center">
                <div class="text-4xl font-oxanium-semibold text-white">{{$availableJobs}}</div>
                <div class="text-gray-300">Available Jobs</div>
            </div>
            <div class="bg-[#12122b] rounded-2xl p-8 text-center">
                <div class="text-4xl font-oxanium-semibold text-white">{{$jobCategoriesCount}}</div>
                <div class="text-gray-300">Job Categories</div>
            </div>
            <!-- More stat cards... -->
        </div>
    </div>
</section>
@endsection
