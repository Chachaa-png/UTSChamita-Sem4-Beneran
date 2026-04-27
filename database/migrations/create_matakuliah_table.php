public function up(): void {
    Schema::create('mata_kuliahs', function (Blueprint $table) {
        $table->id();
        $table->string('kode_mk')->unique();
        $table->string('nama_mk');
        $table->integer('sks');
        $table->timestamps();
    });
}