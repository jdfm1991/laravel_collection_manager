import { Table, TableBody, TableCaption, TableCell, TableHead, TableHeader, TableRow, } from '@/components/ui/table';
import { Filters } from '@/types';
import { Company } from '@/types/companies';
import SortLink from './sort-link';

type CompanyListProps = {
  companies: Company[]
  filters: Filters
}

export default function CompanyList({ companies, filters }: CompanyListProps) {
  const formatDate = (date: string) => new Date(date).toLocaleDateString();
  return (
    <Table>
      <TableCaption>A list of all yours companies.</TableCaption>
      <TableHeader>
        <TableRow>
          <TableHead className="w-[100px]">
            <SortLink filters={filters} field="id" label="ID" />
          </TableHead>
          <TableHead>
            <SortLink filters={filters} field="name" label="Name" />
          </TableHead>
          <TableHead>
            <SortLink filters={filters} field="email" label="Email" />
          </TableHead>
          <TableHead>
            <SortLink filters={filters} field="created_at" label="Created At" />
          </TableHead>
          <TableHead className="text-right">Accion</TableHead>
        </TableRow>
      </TableHeader>
      <TableBody>
        {companies.length > 0 ? (
          <>
            {companies.map((company) => (
              <TableRow key={company.id}>
                <TableCell className="font-medium">{company.id}</TableCell>
                <TableCell>{company.name}</TableCell>
                <TableCell>{company.address}</TableCell>
                <TableCell>{formatDate(company.created_at)}</TableCell>

              </TableRow>
            ))}
          </>
        ) :
          (
            <TableRow>
              <TableCell colSpan={5} className='text-red'>Data Not Found</TableCell>
            </TableRow>
          )
        }

      </TableBody>
    </Table>
  )
};