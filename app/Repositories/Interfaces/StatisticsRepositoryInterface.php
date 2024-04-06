<?php

namespace App\Repositories\Interfaces;

interface StatisticsRepositoryInterface
{
    public function todaySubscribers();
    public function todayRevenue();
    public function todayUsers();
    public function todayReservations();
    public function totalSubscribers();
    public function totalCategories();
    public function totalUsers();
    public function totalActiveSubscribers();
    public function totalOffers();
    public function latestSubscribers();
}
