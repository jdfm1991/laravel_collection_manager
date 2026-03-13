import { index } from "@/routes/company";
import { Filters } from "@/types";
import { Link } from "@inertiajs/react";
import { ArrowDownUp, ArrowDownNarrowWide, ArrowUpNarrowWide } from "lucide-react";

type SortLinkProps = {
  filters: Filters;
  field: string;
  label: string;
}

export default function SortLink({ filters, field, label }: SortLinkProps) {
  return (
    <>
      {
        filters.sortBy !== field ? (
          <Link
            className="flex item-center space-x-2"
            href={index().url}
            data={{ ...filters, sortDirection: 'DESC', sortBy: field }}
          >
            <span>{label}</span>
            <ArrowDownUp className="w-4 h-4" />
          </Link>
        ) : filters.sortBy === field && filters.sortDirection === 'DESC' ? (
          <Link
            className="flex item-center space-x-2"
            href={index().url}
            data={{ ...filters, sortDirection: 'ASC', sortBy: field }}
          >
            <span>{label}</span>
            <ArrowDownNarrowWide className="w-4 h-4" />
          </Link>
        ) : (
          <Link
            className="flex item-center space-x-2"
            href={index().url}
            data={{ ...filters, sortDirection: 'DESC', sortBy: field }}
          >
            <span>{label}</span>
            <ArrowUpNarrowWide className="w-4 h-4" />
          </Link>
        )
      }
    </>
  )
}
