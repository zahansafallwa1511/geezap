<?php
namespace App\Observers;

use App\Caches\JobCategoryCache;
use App\Caches\JobListingCache;
use App\Caches\JobPageCache;
use App\Caches\JobsCountCache;
use App\Caches\LatestJobsCache;
use App\Caches\MostViewedJobsCache;
use App\Caches\RelatedJobListingCache;
use App\Models\JobListing;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class JobListingObserver
{
    public function creating(JobListing $jobListing): void
    {
        $jobListing->uuid = Str::uuid();
        $jobListing->slug = Str::slug($jobListing->job_title.'-'.time());
    }

    public function updating(JobListing $jobListing): void
    {

    }

    public function created(JobListing $jobListing): void
    {
        $this->clearCache();
    }

    public function updated(JobListing $jobListing): void
    {
        $this->clearCache();
    }

    public function deleted(JobListing $jobListing): void
    {
        $this->clearCache();
    }

    protected function clearCache(): void
    {
        Cache::forget('jobCategoriesJobsCount');
        Cache::forget('jobCategoriesAll');

        JobListingCache::invalidate();
        JobPageCache::invalidate();
        MostViewedJobsCache::invalidate();
        JobsCountCache::invalidateLastWeekAdded();
        JobsCountCache::invalidateTodayAdded();
        JobsCountCache::invalidateAvailableJobsCount();
        RelatedJobListingCache::invalidate();
        LatestJobsCache::invalidate();
        JobCategoryCache::invalidate();
        JobsCountCache::invalidateCategoriesCount();

    }
}
