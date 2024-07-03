<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Tabla 'people'
        /*Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('lastname');
            $table->string('profile_img_url');
            $table->string('address');
            $table->integer('phoneNumber');
            $table->string('type_dni');
            $table->string('dni');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });*/

        //Tabla roles
        Schema::create('roles', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->timestamps();
        });

        

        // Tabla locations
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('location_name');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        // Tabla companies
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('legal_representative_name');
            $table->string('legal_representative_lastname');
            $table->string('legal_representative_dni');
            $table->string('nit')->unique();
            $table->string('person_type');
            $table->string('legal_representative_email');
            $table->string('legal_name_company');
            $table->timestamp('email_verified_at')->nullable();

            $table->boolean('terms_and_conditions')->default(false);
            $table->boolean('processing_of_personal_data')->default(false);

            $table->string('pdf_single_tax_registry');
            $table->string('pdf_bank_certificate');
            $table->string('pdf_legal_representative_dni');
            
            $table->string('account_holder_name');
            $table->string('account_holder_lastname');
            $table->string('bank_name');
            $table->string('account_type');
            $table->string('account_number');
            $table->string('billing_address');
            $table->string('billing_contact_phone_number');
            $table->string('billing_contact_email');
            $table->timestamps();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
        });

        // Tabla 'delivery'
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('gender');
            $table->date('birth_date');
            $table->string('vehicle_type');
            $table->string('dni_document_front');
            $table->string('dni_document_back');
            $table->string('driving_license');
            $table->string('transit_license');
            $table->string('mandatory_insurance');
            $table->string('profile_photo');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });

        // Tabla 'vehicles'
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('delivery_id')->nullable();
            $table->string('brand');
            $table->string('model');
            $table->integer('year');
            $table->string('plate');
            $table->string('type');
            $table->timestamps();
        });

        
        
        // Tabla 'customers'
        /*Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

            // Definiendo claves foráneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });*/

        // Tabla 'warehouses'
        /*Schema::create('warehouses', function (Blueprint $table) {
            $table->id();
            $table->integer('nit');
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->bigInteger('phone');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });*/

        // Tabla 'categories'
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->timestamps();
        });

        // Tabla 'products'
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('price');
           
            $table->timestamps();

            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
        });

        // Tabla pivote 'category_product'
        Schema::create('category_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            // Definiendo claves foráneas
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

         // Tabla 'workshops'
        /*Schema::create('workshops', function (Blueprint $table) {
            $table->id();
            $table->integer('nit');
            $table->string('name');
            $table->string('address');
            $table->string('email');
            $table->bigInteger('phone');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

        });*/

        // Tabla 'services'
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->integer('price');
            $table->unsignedBigInteger('company_id')->nullable();
            $table->timestamps();

            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade')->onUpdate('cascade');

        });

        // Tabla 'orders'
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('state');
            $table->integer('quantity');
            $table->integer('unitprice');
            $table->integer('subtotal');
            $table->timestamps();
            // Definiendo claves foráneas
        });

        // Tabla pivote 'order_product'
        Schema::create('order_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->timestamps();

            // Definiendo claves foráneas
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
        });

        // Tabla pivote 'order_service'
        Schema::create('order_service', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id')->nullable();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->timestamps();

            // Definiendo claves foráneas
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
        });

        // Tabla 'bills'
        /*Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->double('totalprice');
            $table->unsignedBigInteger('customer_id')->nullable();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->timestamps();

            // Definiendo claves foráneas
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade')->onUpdate('cascade');
        });*/

        // Tabla 'delivery'
        /*Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->integer('licenseNumber');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('vehicle_id')->nullable();
            $table->timestamps();

            // Definiendo claves foráneas
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade')->onUpdate('cascade');
        });*/

    }

    /**
     * Revertir las migraciones.
     */
    public function down(): void
    {
        //Schema::dropIfExists('profiles');
        Schema::dropIfExists('vehicles');
        //Schema::dropIfExists('customers');
        //Schema::dropIfExists('warehouses');
        Schema::dropIfExists('products');
        Schema::dropIfExists('services');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('orders');
        //Schema::dropIfExists('bills');
        Schema::dropIfExists('deliveries');
        Schema::dropIfExists('category_product');
        Schema::dropIfExists('order_product');
        Schema::dropIfExists('order_service');
        Schema::dropIfExists('roles');
        Schema::dropIfExists('companies');
        Schema::dropIfExists('locations');
        //Schema::dropIfExists('workshops');
    }
};
