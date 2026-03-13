import { Table, TableBody, TableCaption, TableCell, TableHead, TableHeader, TableRow, } from '@/components/ui/table';
import { Badge } from '@/components/ui/badge';
import { Filters, User } from '@/types';
import SortLink from './sort-link';

type UserListProps = {
  users: User[]
  filters: Filters
}

export default function UserList({ users, filters }: UserListProps) {
  const formatDate = (date: string) => new Date(date).toLocaleDateString();
  return (
    <Table>
      <TableCaption>A list of all your users.</TableCaption>
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
        {users.map((user) => (
          <TableRow key={user.id}>
            <TableCell className="font-medium">{user.id}</TableCell>
            <TableCell>{user.name}</TableCell>
            <TableCell>{user.email}</TableCell>
            <TableCell>{formatDate(user.created_at)}</TableCell>
            <TableCell>
              {
                user.email_verified_at ?
                  (<Badge className="bg-green-50 text-green-700 dark:bg-green-950 dark:text-green-300">Verified</Badge>) :
                  (<Badge variant="destructive">Unverified</Badge>)
              }
            </TableCell>
            <TableCell className="text-right">
            </TableCell>
          </TableRow>
        ))}
      </TableBody>
    </Table>
  )
};