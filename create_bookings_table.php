Schema::create('bookings', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('service_id')->constrained()->onDelete('cascade');
    $table->date('booking_date');
    $table->time('booking_time');
    $table->string('status')->default('pending');
    $table->timestamps();
});
