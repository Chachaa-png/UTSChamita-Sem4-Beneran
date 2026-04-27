public function up(): void {
    Schema::create('dosens', function (Blueprint $table) {
        $table->id();
        $table->string('nama');
        $table->string('nidn')->unique();
        $table->string('email');
        $table->timestamps();
    });
}