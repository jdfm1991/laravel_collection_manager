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
            ID
          </TableHead>
          <TableHead>
            Name
          </TableHead>
          <TableHead>
            Address
          </TableHead>
        </TableRow>
      </TableHeader>
      <TableBody>
        {companies.map((company) => (
          <TableRow key={company.id}>
            <TableCell className="font-medium">{company.id}</TableCell>
            <TableCell>{company.name}</TableCell>
            <TableCell>{company.address}</TableCell>
          </TableRow>
        ))}
      </TableBody>
    </Table>
  )
};