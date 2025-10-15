<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About Us') }}
        </h2>
    </x-slot>
    <div class="py-10">
        <div class="max-w-4xl mx-auto">
            <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl p-1 shadow-lg">
                <div class="bg-white rounded-xl p-8">
                    <h1 class="text-3xl md:text-4xl font-extrabold text-gray-900 tracking-tight">
                        Sobre Nosso Blog
                    </h1>
                    <p class="mt-3 text-sm text-gray-500">Estudo Laravel Two</p>

                    <div class="mt-6 h-px bg-gradient-to-r from-gray-100 via-gray-200 to-gray-100"></div>

                    <div class="mt-6 space-y-4 text-gray-700 leading-relaxed">
                        <p>
                            Bem-vindo ao "Estudo Laravel Two"! Este é um espaço dedicado a compartilhar conhecimentos, experiências e insights sobre desenvolvimento web, com foco especial no framework Laravel.
                        </p>
                        <p>
                            Nosso objetivo é fornecer conteúdo de alta qualidade que ajude tanto iniciantes quanto desenvolvedores experientes a aprimorar suas habilidades e se manter atualizados com as melhores práticas do mercado.
                        </p>
                        <p>
                            Aqui, você encontrará tutoriais detalhados, dicas práticas, análises de ferramentas e muito mais. Estamos comprometidos em criar uma comunidade de aprendizado colaborativa, onde todos possam crescer juntos.
                        </p>
                    </div>

                    <div class="mt-8 grid grid-cols-1 sm:grid-cols-3 gap-4">
                        <div class="rounded-lg border border-gray-100 p-4 bg-gray-50">
                            <div class="text-sm font-semibold text-gray-900">Tutoriais</div>
                            <div class="text-sm text-gray-600">Passo a passo prático e direto ao ponto.</div>
                        </div>
                        <div class="rounded-lg border border-gray-100 p-4 bg-gray-50">
                            <div class="text-sm font-semibold text-gray-900">Boas práticas</div>
                            <div class="text-sm text-gray-600">Dicas para código limpo e performático.</div>
                        </div>
                        <div class="rounded-lg border border-gray-100 p-4 bg-gray-50">
                            <div class="text-sm font-semibold text-gray-900">Comunidade</div>
                            <div class="text-sm text-gray-600">Aprendizado colaborativo e contínuo.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>