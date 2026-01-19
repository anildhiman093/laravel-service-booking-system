Schema::create('services', function (Blueprint $table) {
    $table->id();
    $table->foreignId('vendor_id')->constrained('users')->onDelete('cascade');
    $table->string('title');
    $table->text('description')->nullable();
    $table->decimal('price', 8, 2);
    $table->integer('duration'); // minutes
    $table->timestamps();
});
