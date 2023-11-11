<?php

declare(strict_types=1);

return [
    /*
     * ------------------------------------------------------------------------
     * Default Firebase project
     * ------------------------------------------------------------------------
     */

    'default' => env('FIREBASE_PROJECT', 'app'),

    /*
     * ------------------------------------------------------------------------
     * Firebase project configurations
     * ------------------------------------------------------------------------
     */

    'projects' => [
        'app' => [

            /*
             * ------------------------------------------------------------------------
             * Credentials / Service Account
             * ------------------------------------------------------------------------
             *
             * In order to access a Firebase project and its related services using a
             * server SDK, requests must be authenticated. For server-to-server
             * communication this is done with a Service Account.
             *
             * If you don't already have generated a Service Account, you can do so by
             * following the instructions from the official documentation pages at
             *
             * https://firebase.google.com/docs/admin/setup#initialize_the_sdk
             *
             * Once you have downloaded the Service Account JSON file, you can use it
             * to configure the package.
             *
             * If you don't provide credentials, the Firebase Admin SDK will try to
             * auto-discover them
             *
             * - by checking the environment variable FIREBASE_CREDENTIALS
             * - by checking the environment variable GOOGLE_APPLICATION_CREDENTIALS
             * - by trying to find Google's well known file
             * - by checking if the application is running on GCE/GCP
             *
             * If no credentials file can be found, an exception will be thrown the
             * first time you try to access a component of the Firebase Admin SDK.
             *
             */

             'credentials' => [
                'type' => 'service_account',
                'project_id' => 'kai-unesasby',
                'private_key_id' => '4044af1c61254eee7ab8787fa3bc15ebd9c32788',
                'private_key' => '-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCnrv+yj3gor8zb\na6yrDl4PiaR4Bow7JEZ2zqOJpAx0R2tDrJ0fc98eb1WejFLYOMFItxLARpimkTWM\nAxyoiqv/fx3OwETW8aOd+PRDVLHs9PwCrNlX6XbOXb6+FNyNON13tjqtYKIudeF3\nA8fZV4IbgYfQmV47Qg4JlcYnzeYKyfgXlsLz2AQri6IAU+D1tLHD5fLX7Z4gBd2T\nr4FqjFWUqTwkCQ46D9f56IVVj1d51zXpsxGR6kSOtwDVDojEA83rfWGYFPUsWJH0\nnivRwdamAV1462U6BpkDzQbyp8nHf+tEE/ZjHCgS8IjF/28GXDLsEbJ8K8zlhFXm\nvkTZ5sNbAgMBAAECggEAMefagBlFCM7xqGhOdoaLJhKwGWzRdZShSCDN+VwSvNS4\nruaDyOWihRtbnxliWqnhlLOv5/va2NAk4KvYbqz+7ca2Z18/3b0DFjQO9q8RWVW8\nX0t0UD7Sti6eY1IwJfPDripVIl69RhidZt+ALkZmGauecU4EBpztMpsZ46TbD2B7\nLgoKr4yGPQ/QN9fuIXDiS8hyMznDChn/0QkbgKYfbo3meo4U24kTnwadnPfG2WWN\nrkNSaHln9FKFH1UgpjeZ1VQTDSyOZfm7waCkRvTxWCYQd8/XGDyANZckcuixiZPC\n7KCFqX97qV6/Ax+gl+d+BOUFlEi65HXNIcwqWZIUcQKBgQDhIzOVrys8sRr2oTtx\nLRMafGGopBnWOOashG+TeTtooF/7WUOgv5LDMDXZJ8IejsnSxklMMHNDsxpLda/e\nzWKztujUn24ss7OIQnDdN3pbg3Gbi9hl8h37s8XOm+7UNfhO1xlcLBy1ZKzCv3yW\nu5l111/ziKm5f9SDz7TZsSx2cwKBgQC+q44FGTc/wn6rgdkcEZDVftdiKNr7oS3X\nDIisYyO/tDuJhiJR4cgt8mUcCMV3zAhziJ5n6+HBUvaU4JtXHWjwxW1eN6SLWuOR\ncQUiFqW2oPLKGr6eayd2qKR7PELNt8jjLTZr77cF5A7gGy/90nURGdoSg1bTvT8i\n2jZehfldeQKBgEpvfQqsU7tJQwTv4dtVb899+Dvtpa0yOvInB0zW9FFvVMyhgr6P\nGFL4iZU2k/POeeP6MxnBmxpzCOqSCoe7mDqa6vgBjkexUlZmwTIiuY2wM8udvPpX\nxpoFogzheWEoRuSqMXRMEWHX21a4QNUFSYOwpcS7FoKCRR0fe0fOUEkJAoGABx3E\nCTCtvTV3INOR1Nha/XzkcQdxVN7pJROUrkps9SS27CUTdtbkb8KSP3+cTyJQVm+M\n6fgFzv9XsKrJYXD5j7LuqAuPmpvjznPXazRJLw3GwgBJiQQazvTwXqEbJS5s0v3H\nADRMMm4WmAqrud92+xJp7zLztKdlidl3GgQKEJECgYEAyCAkY9EMHIf0S/WJv+KB\n7uXW3734iqPHIU3eDFH0do36K+IqUPdnHAahnOGRquO/qkbAO9g3wtjNFI4bHJvF\nyn1DGFPwOa+ArY5o0THT7sTTQ8PfXEhAJf4bkBdXAc6cFg/WxNRSOTofmpgwQrH+\n0fyc101tirtSeJ7hXyNXUGY=\n-----END PRIVATE KEY-----\n',
                'client_email' => 'firebase-adminsdk-prc4f@kai-unesasby.iam.gserviceaccount.com',
                'client_id' => '107346419754196322504',
                'auth_uri' => 'https://accounts.google.com/o/oauth2/auth',
                'token_uri' => 'https://oauth2.googleapis.com/token',
                'auth_provider_x509_cert_url' => 'https://www.googleapis.com/oauth2/v1/certs',
                'client_x509_cert_url' => 'https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-prc4f%40kai-unesasby.iam.gserviceaccount.com',
                'universe_domain' => 'googleapis.com',
            ],
            /*
             * ------------------------------------------------------------------------
             * Firebase Auth Component
             * ------------------------------------------------------------------------
             */

            'auth' => [
                'tenant_id' => env('FIREBASE_AUTH_TENANT_ID'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Realtime Database
             * ------------------------------------------------------------------------
             */

            'database' => [

                /*
                 * In most of the cases the project ID defined in the credentials file
                 * determines the URL of your project's Realtime Database. If the
                 * connection to the Realtime Database fails, you can override
                 * its URL with the value you see at
                 *
                 * https://console.firebase.google.com/u/1/project/_/database
                 *
                 * Please make sure that you use a full URL like, for example,
                 * https://my-project-id.firebaseio.com
                 */

                'url' => env('FIREBASE_DATABASE_URL'),

                /*
                 * As a best practice, a service should have access to only the resources it needs.
                 * To get more fine-grained control over the resources a Firebase app instance can access,
                 * use a unique identifier in your Security Rules to represent your service.
                 *
                 * https://firebase.google.com/docs/database/admin/start#authenticate-with-limited-privileges
                 */

                // 'auth_variable_override' => [
                //     'uid' => 'my-service-worker'
                // ],

            ],

            'dynamic_links' => [

                /*
                 * Dynamic links can be built with any URL prefix registered on
                 *
                 * https://console.firebase.google.com/u/1/project/_/durablelinks/links/
                 *
                 * You can define one of those domains as the default for new Dynamic
                 * Links created within your project.
                 *
                 * The value must be a valid domain, for example,
                 * https://example.page.link
                 */

                'default_domain' => env('FIREBASE_DYNAMIC_LINKS_DEFAULT_DOMAIN'),
            ],

            /*
             * ------------------------------------------------------------------------
             * Firebase Cloud Storage
             * ------------------------------------------------------------------------
             */

            'storage' => [

                /*
                 * Your project's default storage bucket usually uses the project ID
                 * as its name. If you have multiple storage buckets and want to
                 * use another one as the default for your application, you can
                 * override it here.
                 */

                'default_bucket' => env('FIREBASE_STORAGE_DEFAULT_BUCKET'),

            ],

            /*
             * ------------------------------------------------------------------------
             * Caching
             * ------------------------------------------------------------------------
             *
             * The Firebase Admin SDK can cache some data returned from the Firebase
             * API, for example Google's public keys used to verify ID tokens.
             *
             */

            'cache_store' => env('FIREBASE_CACHE_STORE', 'file'),

            /*
             * ------------------------------------------------------------------------
             * Logging
             * ------------------------------------------------------------------------
             *
             * Enable logging of HTTP interaction for insights and/or debugging.
             *
             * Log channels are defined in config/logging.php
             *
             * Successful HTTP messages are logged with the log level 'info'.
             * Failed HTTP messages are logged with the log level 'notice'.
             *
             * Note: Using the same channel for simple and debug logs will result in
             * two entries per request and response.
             */

            'logging' => [
                'http_log_channel' => env('FIREBASE_HTTP_LOG_CHANNEL'),
                'http_debug_log_channel' => env('FIREBASE_HTTP_DEBUG_LOG_CHANNEL'),
            ],

            /*
             * ------------------------------------------------------------------------
             * HTTP Client Options
             * ------------------------------------------------------------------------
             *
             * Behavior of the HTTP Client performing the API requests
             */

            'http_client_options' => [

                /*
                 * Use a proxy that all API requests should be passed through.
                 * (default: none)
                 */

                'proxy' => env('FIREBASE_HTTP_CLIENT_PROXY'),

                /*
                 * Set the maximum amount of seconds (float) that can pass before
                 * a request is considered timed out
                 *
                 * The default time out can be reviewed at
                 * https://github.com/kreait/firebase-php/blob/6.x/src/Firebase/Http/HttpClientOptions.php
                 */

                'timeout' => env('FIREBASE_HTTP_CLIENT_TIMEOUT'),

                'guzzle_middlewares' => [],
            ],
        ],
    ],
];
