import { Head } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import type { BreadcrumbItem } from '@/types';
import { index } from '@/routes/company';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'company',
        href: index().url,
    },
];

export default function Index() {
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Company" />
            <div><h1>Company</h1></div>
            
        </AppLayout>
    );
}
